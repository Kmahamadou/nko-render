<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audio;
use Illuminate\Support\Facades\log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class audiocontroller extends Controller
{
    public function show()
    {
        $randomSentence = DB::table('nkosentences')->inRandomOrder()->first();
        return view('audioNko')->with('randomSentence', $randomSentence);
        // return view('progressHelper')->with('randomSentence', $randomSentence);
    }

    public function recording()
    {
        $randomSentence = DB::table('nkosentences')->inRandomOrder()->first();
        return view('record')->with('randomSentence', $randomSentence);
        // return view('progressHelper')->with('randomSentence', $randomSentence);
    }


    public function saveaudio(Request $request)
    {


        // log::info($request->all());

        $base64String = $request->valeur0;
        $texteSaisi = $request->valeur1;


        $binaryData = base64_decode($base64String);

        $randomNkoSentence = DB::table('nkosentences')->inRandomOrder()->first();


        // $texteSaisi = $request->input('texte');

        // Vous pouvez faire ce que vous voulez avec le texte saisi, par exemple le sauvegarder en base de données.

        // return redirect('/saisie')->with('message', 'Texte saisi avec succès !');
        // // Return the response

        $audio = audio::create([
            // 'audio_data' => $audio_storage_path,
            'texte_saisi' => $texteSaisi,
        ]);

        $audio_name = $audio->id;

        $audio_storage_path = "nko/audio-".$audio_name.".wav";


        $audiotest = \Storage::disk('s3')->put($audio_storage_path, $binaryData);





        if (!empty($audio)) {
            return response()->json(['message' => 'Request processed successfully', 'next_nko_sentence' => $randomNkoSentence->sentence]);

        }
        return response()->json(['error' => "Erreur lors du chargement de l'audio"]);

    }


}
