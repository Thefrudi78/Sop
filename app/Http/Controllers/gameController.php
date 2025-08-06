<?php

namespace App\Http\Controllers;
use App\Models\character;
use App\Models\game;
use App\Models\answer;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class gameController extends Controller
{
    public function index($id)
    {   
        answer::where('session_id', Session::getId())->delete();
        $characters = character::where('game_id', $id)->get();
        $game = game::find($id);
        return view('index.game', compact('characters', 'game'));
    }

    public function statistics()
    {
        $characters = character::all();

        foreach ($characters as $character) {
            $character->percentage = $character->total > 0 ? round($character->smashed / $character->total * 100, 2) : 0;
        }
        return view('Statistics.index', compact('characters'));
    }
}
