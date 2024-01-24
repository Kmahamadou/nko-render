<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audio;
use Illuminate\Support\Facades\log;
use Illuminate\Support\Facades\DB;
class audiocontroller extends Controller
{
    public function show()
    {
        $randomSentence = DB::table('frenchsentences')->inRandomOrder()->first();
        return view('saisie')->with('randomSentence', $randomSentence);
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


        log::info($request->all());

        $audio = $request->valeur0;
        $texteSaisi = $request->valeur1;

        // $texteSaisi = $request->input('texte');

        // Vous pouvez faire ce que vous voulez avec le texte saisi, par exemple le sauvegarder en base de données.

        // return redirect('/saisie')->with('message', 'Texte saisi avec succès !');
        // // Return the response
        $audio_storage_path = "Nko/audio-".$texteSaisi.".wav";
        $audiotest = \Storage::disk('s3')->put($audio_storage_path, file_get_contents($request->file('idCard')));



        $audio = audio::create([
            'audio_data' => $audio,
            'texte_saisi' => $texteSaisi,
        ]);


        if (!empty($audio)) {
            return response()->json(['message' => 'Request processed successfully']);

        }

        return response()->json(['error' => "Erreur lors du chargement de l'audio"]);

    }

    
}
