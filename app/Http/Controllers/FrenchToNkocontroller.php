<?php

namespace App\Http\Controllers;
use App\Models\FrenchToNko;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class FrenchToNkocontroller extends Controller
{
    public function showFrenchToNkoPage()
    {
        $randomSentence = DB::table('frenchsentences')->inRandomOrder()->first();

        // dd($randomSentence);
        return view('frenchToNko')->with('randomSentence', $randomSentence);
    }

    public function saveFrenchToNko(Request $request)
    {
                // dd($request->all());

        $nkoSentence = $request->sentence;
        $equivalentFrenchText = $request->sentence;

        // Créer deux phrases distinctes
        $traduction = FrenchToNko::create([
            'frenchSentence' => $equivalentFrenchText,
            'nkoSentence' => $nkoSentence,
        ]);

        if (!empty($traduction)) {
            return redirect()->route('showFrenchToNkoPage')->with('success', 'Phrase traduite avec succès !');
        }            
        
        return redirect()->route('showFrenchToNkoPage')->with('error', 'Une erreur est survenue !');

    }
}
