<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audio;
use App\Models\frenchsentence;
use App\Models\FrenchToNko;
use App\Models\nkosentence;

class homepagecontroller extends Controller
{
    public function homepage()
    {
        $countsValues = [
            "audios" => audio::count(),
            "frenchsentences" => frenchsentence::count(),
            "FrenchToNkos" => FrenchToNko::count(),
            "nkosentences" => nkosentence::count(),
        ];

        // dd($countsValues);
        return view('homepageSecure')->with("countsValues", $countsValues);
    }

    // public function mainpage()
    // {
    //     return view('main');
    // }
}
