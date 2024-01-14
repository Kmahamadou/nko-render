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

    public function saveFrenchText(Request $request)
    {
        
        $sentence = $request->sentence;

        // Créer deux phrases distinctes
        frenchsentence::create([
            'sentence' => $sentence,
        ]);

        if (!empty($sentence)) {
            return redirect()->route('onlyFrenchText')->with('success', 'Phrase ajouté avec succès !');
        }            
        
        return redirect()->route('onlyFrenchText')->with('error', 'Une erreur est survenue !');

    }
}