<?php

namespace App\Http\Controllers;
use App\Models\character;
use App\Models\game;
use Illuminate\Http\Request;

class gameController extends Controller
{
    public function index($id)
    {   
        $characters = character::where('game_id', $id)->get();
        $game = game::find($id);
        return view('index.game', compact('characters', 'game'));
    }
}
