<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\question;
use App\Models\answer;

class SmashorPassController extends Controller
{
    public function start($id)
    {
        Session::put("question_index_$id", 0);
        return redirect()->route('questionnaire.show', $id);
    }

    public function show($id)
    {
        $questions = question::where('game_id', $id)->get();
        $index = Session::get("question_index_$id", 0);

        if ($index >= $questions->count()) {
            return redirect()->route('questionnaire.complete', $id);
        }

        $question = $questions[$index];
        return view('questionnaire.question', compact('question', 'id'));
    }

    public function answer(Request $request, $id)
    {
        $request->validate(['answer' => 'required']);

        $questions = Question::where('game_id', $id)->get();
        $index = Session::get("question_index_$id", 0);

        Answer::create([
            'question_id' => $questions[$index]->id,
            'game_id' => $id,
            'session_id' => Session::getId(),
            'answer' => filter_var($request->answer, FILTER_VALIDATE_BOOLEAN),
        ]);

        Session::put("question_index_$id", $index + 1);

        return redirect()->route('questionnaire.show', $id);
    }

    public function complete($id)
    {
        Session::forget("question_index_$id");
        return view('questionnaire.complete', compact('id'));
    }
}
