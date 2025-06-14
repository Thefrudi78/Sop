<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $games = \App\Models\game::all();
        return view('index.dashboard', compact('games'));
    }
}
