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
        
        $sentence = $request->sentence;
        // dd($sentence);
        // Créer deux phrases distinctes
        nkosentence::create([
            'sentence' => $sentence,
        ]);
//  dd($sentence);
        if (!empty($sentence)) {
            return redirect()->route('showNkoText')->with('success', 'Phrase ajouté avec succès !');
        }            
        
        return redirect()->route('showNkoText')->with('error', 'Une erreur est survenue !');

    }
}