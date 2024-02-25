<?php

namespace App\Http\Controllers;
use App\Models\frenchsentence;
use App\Models\FrenchToNko;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class frenchcontroller extends Controller
{
    public function showFrenchTextPage()
    {
        $randomSentence = DB::table('frenchsentences')->inRandomOrder()->first();

        return view('frenchtext')->with('randomSentence', $randomSentence);
    }

    public function showNkoFrenchTextPage()
    {
        $randomSentence = DB::table('frenchsentences')->inRandomOrder()->first();

        return view('nko-version.frenchtext')->with('randomSentence', $randomSentence);
    }

    public function saveFrenchText(Request $request)
    {

        $frenchLatinRegex = '/^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s,;()!?.:"\'~_-]+$/';
        $validation = $request->validate([
            'sentence' => ['required','string', 'regex:'.$frenchLatinRegex],
        ]);


        $sentence = $request->sentence;
        // Créer deux phrases distinctes
        frenchsentence::create([
            'sentence' => $sentence,
        ]);


        // Firebase - Firestore
        $sentenceRef = app('firebase.firestore')->database()->collection('FrenchSentence')->newDocument();
        $sentenceRef->set([
            'sentence' => $request->sentence,
        ]);


        if (!empty($sentence)) {
            return response()->json(['message' => 'Phrase ajouté avec succès !']);
        }
        return response()->json(['error' => 'Une est survenue']);

    }
}
