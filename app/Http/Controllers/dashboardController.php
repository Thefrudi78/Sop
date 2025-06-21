<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\answer;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        answer::where('session_id', Session::getId())->delete();
        $games = \App\Models\game::all();
        return view('index.dashboard', compact('games'));
    }
}
