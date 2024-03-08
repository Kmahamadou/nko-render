<?php

namespace App\Http\Controllers;
use App\Models\FrenchToNko;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class FrenchToNkocontroller extends Controller
{


    public function getRandomFrenchSentence()
    {
        // Log::info($direction);

        do {
            $randomSentence = DB::table('frenchsentences')->inRandomOrder()->first();

            // Reverse the string
            $reversedString = strrev($randomSentence->sentence);

            // Count the spaces in the reversed string
            $spaceCount = substr_count($reversedString, ' ');

            // Uncomment the following line if you want to see the details during testing
            // dd("randomSentence->sentence", $randomSentence->sentence, "spaceCount", $spaceCount);

        } while ($spaceCount >= 201);

        return response()->json(['sentence' => $randomSentence->sentence], 200);

    }


    public function showFrenchToNkoPage()
    {

        do {
            $randomSentence = DB::table('frenchsentences')->inRandomOrder()->first();

            // Reverse the string
            // $reversedString = strrev($randomSentence->sentence, ' ');

            // Count the spaces in the reversed string
            $spaceCount = substr_count($randomSentence->sentence, ' ');

            // Uncomment the following line if you want to see the details during testing
            // dd("randomSentence->sentence", $randomSentence->sentence, "spaceCount", $spaceCount);

        } while ($spaceCount >= 201);


        $randomSentence = DB::table('frenchsentences')->inRandomOrder()->first();

        // dd($randomSentence);
        return view('frenchToNko')->with('randomSentence', $randomSentence);
    }


    public function showNkoFrenchToNkoPage()
    {
        $randomSentence = DB::table('frenchsentences')->inRandomOrder()->first();

        // dd($randomSentence);
        return view('nko-version.frenchToNko')->with('randomSentence', $randomSentence);
    }


    public function saveFrenchToNko(Request $request)
    {
                // dd($request->all());

        $frenchLatinRegex = '/^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s,;()<>!?.:\/"\'~_-]+$/';
        // $nkoRegex = '/^[\x{07C0}-\x{07F9}\x{07FA}-\x{07FF}\s:()؟-]+$/u';
        $nkoRegex = '/^[\x{07C0}-\x{07F9}\x{07FA}-\x{07FF}\s:\()؟⁏~.,"ߑ߸:."<\/>‹›،﴾﴿÷×_=%*°߹-]+$/u';


        $validation = $request->validate([
            'randomFrenchSentence' => ['required', 'string', 'regex:'.$frenchLatinRegex],
            'sentence' => ['required', 'string', 'regex:'.$nkoRegex],
        ]);


        $nkoSentence = $request->sentence;
        $equivalentFrenchText = $request->randomFrenchSentence;
        $randomFrenchSentence = DB::table('frenchsentences')->inRandomOrder()->first();

        // Créer deux phrases distinctes
        $traduction = FrenchToNko::create([
            'frenchSentence' => $equivalentFrenchText,
            'nkoSentence' => $nkoSentence,
        ]);


        // Firebase - Firestore
        // $sentenceRef = app('firebase.firestore')->database()->collection('FrenchToNko')->newDocument();
        // $sentenceRef->set([
        //     'frenchSentence' => $equivalentFrenchText,
        //     'nkoSentence' => $nkoSentence,
        // ]);



        if (!empty($traduction)) {
            return response()->json(['message' => 'Phrase ajouté avec succès !', 'next_french_sentence' => $randomFrenchSentence->sentence]);
        }

        return response()->json(['error' => 'Une erreur est survenue ! !']);

    }
}
