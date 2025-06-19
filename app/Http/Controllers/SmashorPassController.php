<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\question;
use App\Models\answer;
use App\Models\character;
use App\Models\data;

class SmashorPassController extends Controller
{
    public function start($id)
    {
        $questions = question::where('game_id', $id)->pluck('id')->toArray();
        shuffle($questions);
        Session::put("question_index_$id", 0);
        Session::put("question_order_$id", $questions);
        return redirect()->route('questionnaire.show', $id);
    }

    public function show($id)
    {
        $order = Session::get("question_order_$id", []);
        $index = Session::get("question_index_$id", 0);
        if (empty($order)) {
            // fallback: regenerate order if missing
            $questions = question::where('game_id', $id)->pluck('id')->toArray();
            shuffle($questions);
            Session::put("question_order_$id", $questions);
            $order = $questions;
        }
        if ($index >= count($order)) {
            return redirect()->route('questionnaire.complete', $id);
        }
        $question = question::find($order[$index]);
        return view('questionnaire.question', compact('question', 'id'));
    }

    public function answer(Request $request, $id)
    {
        $request->validate(['answer' => 'required']);
        $order = Session::get("question_order_$id", []);
        $index = Session::get("question_index_$id", 0);
        if (empty($order) || !isset($order[$index])) {
            return redirect()->route('questionnaire.complete', $id);
        }
        $questionId = $order[$index];
        $question = question::find($questionId);
        $answer = filter_var($request->answer, FILTER_VALIDATE_BOOLEAN);
        Answer::create([
            'question_id' => $question->id,
            'game_id' => $id,
            'session_id' => Session::getId(),
            'answer' => $answer,
        ]);
        if ($answer === true) {
            character::where('id', $question->id)->increment('smashed');
            character::where('id', $question->id)->increment('total');
        } else {
            character::where('id', $question->id)->increment('passed');
            character::where('id', $question->id)->increment('total');
        }
        Session::put("question_index_$id", $index + 1);
        return redirect()->route('questionnaire.show', $id);
    }

    public function complete($id)
    {
        if (!answer::exists()) {
            return redirect()->route('dashboard', $id)->with('error', 'No answers recorded for this session.');
        }

        $smashed = answer::where('answer', true)
            ->where('session_id', Session::getId())
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->select('answers.*', 'questions.name', 'questions.image')
            ->get();
        
        $passed = answer::where('answer', false)
            ->where('session_id', Session::getId())
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->select('answers.*', 'questions.name', 'questions.image')
            ->get();
        
        answer::where('session_id', Session::getId())->delete();
        
        return view('questionnaire.completed', compact('smashed', 'passed', 'id'));
    }
}
