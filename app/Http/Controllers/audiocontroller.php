<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audio;
use Illuminate\Support\Facades\log;

class audiocontroller extends Controller
{
    public function show()
    {
        return view('saisie');
    }

    

    public function save(Request $request)
    {

        // log::info($request->all());

        $audio = $request->base64;

        // $texteSaisi = $request->input('texte');

        // Vous pouvez faire ce que vous voulez avec le texte saisi, par exemple le sauvegarder en base de données.

        // return redirect('/saisie')->with('message', 'Texte saisi avec succès !');
        // // Return the response

        // \App\Models\Audio::create([
        //     'base64_data' => $audio,
        //     'texte' => $texteSaisi,
        // ]);

        return response()->json(['message' => 'Request processed successfully']);

    }

    public function saveaudio(Request $request)
    {

        // log::info($request->all());

        $audio = $request->base64;

        // $texteSaisi = $request->input('texte');

        // Vous pouvez faire ce que vous voulez avec le texte saisi, par exemple le sauvegarder en base de données.

        // return redirect('/saisie')->with('message', 'Texte saisi avec succès !');
        // // Return the response

        $audio = audio::create([
            'audio_data' => $audio,
            // 'texte_saisi' => $texteSaisi,
        ]);

        if (!empty($audio)) {
            return response()->json(['message' => 'Request processed successfully']);

        }

        return response()->json(['error' => "Erreur lors du chargement de l'audio"]);

    }

    
}
