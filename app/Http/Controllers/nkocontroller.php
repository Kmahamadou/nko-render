<?php

namespace App\Http\Controllers;
use App\Models\nkosentence;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class nkocontroller extends Controller
{
    public function showNkoText()
    {
        $randomSentence = DB::table('nkosentences')->inRandomOrder()->first();

        return view('nkotext')->with('randomSentence', $randomSentence);
    }

    public function saveNkoText(Request $request)
    {



        $nkoRegex = '/^[\x{07C0}-\x{07F9}\x{07FA}-\x{07FF}\s:\()؟.,"ߑ߸:."‹›،﴾﴿÷×_=%*°߹-]+$/u';

        $validation = $request->validate([
            'sentence' => ['required', 'string', 'regex:'.$nkoRegex],
        ]);

        $sentence = $request->sentence;

        nkosentence::create([
            'sentence' => $sentence,
        ]);


        // Firebase - Firestore
        $sentenceRef = app('firebase.firestore')->database()->collection('nkosentence')->newDocument();
        $sentenceRef->set([
            'sentence' => $sentence,
        ]);

//  dd($sentence);
        if (!empty($sentence)) {
            return response()->json(['message' => 'Phrase ajouté avec succès !']);
        }
        return response()->json(['error' => 'Une est survenue']);


    }
}
