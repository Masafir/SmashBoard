<?php

namespace App\Http\Controllers;

use App\Models\Characters;

class MainController extends Controller
{
    public function home()
    {
        $characters = Characters::all();

    return view('home',[
        'characters' => $characters
    ]);
    }
}