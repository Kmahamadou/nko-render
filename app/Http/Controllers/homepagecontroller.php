<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepagecontroller extends Controller
{
    public function homepage()
    {
    return view('homepage');
    }

    public function mainpage()
    {
    return view('main');
    }
}
