<?php

namespace App\Http\Controllers;
use App\Models\nkosentence;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class nkocontroller extends Controller
{
    public function getRandomNkoSentence()
    {
        // Log::info($direction);

        do {
            $randomSentence = DB::table('nkosentences')->inRandomOrder()->first();


            // Reverse the string
            $reversedString = strrev($randomSentence->sentence);

            // Count the spaces in the reversed string
            $spaceCount = substr_count($reversedString, ' ');

            // Uncomment the following line if you want to see the details during testing
            // dd("randomSentence->sentence", $randomSentence->sentence, "spaceCount", $spaceCount);

        } while ($spaceCount >= 201);

        return response()->json(['sentence' => $randomSentence->sentence], 200);

    }

    public function showNkoText()
    {
        do {
            $randomSentence = DB::table('nkosentences')->inRandomOrder()->first();


            // Reverse the string
            $reversedString = strrev($randomSentence->sentence);

            // Count the spaces in the reversed string
            $spaceCount = substr_count($reversedString, ' ');

            // Uncomment the following line if you want to see the details during testing
            // dd("randomSentence->sentence", $randomSentence->sentence, "spaceCount", $spaceCount);

        } while ($spaceCount >= 201);


        return view('nkotext')->with('randomSentence', $randomSentence);
    }

    public function showNkoNkoText()
    {
        $randomSentence = DB::table('nkosentences')->inRandomOrder()->first();

        return view('nko-version.nkotext')->with('randomSentence', $randomSentence);
    }

    public function saveNkoText(Request $request)
    {



        $nkoRegex = '/^[\x{07C0}-\x{07F9}\x{07FA}-\x{07FF}\s:\()؟⁏~.,"ߑ߸:."<\/>‹›،﴾﴿÷×_=%*°߹-]+$/u';

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
