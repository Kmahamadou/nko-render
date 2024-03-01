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

        do {
            $randomSentence = DB::table('nkosentences')->inRandomOrder()->first();

            // Reverse the string
            $reversedString = strrev($randomSentence->sentence);

            // Count the spaces in the reversed string
            $spaceCount = substr_count($reversedString, ' ');

            // Uncomment the following line if you want to see the details during testing
            // dd("randomSentence->sentence", $randomSentence->sentence, "spaceCount", $spaceCount);

        } while ($spaceCount >= 201);

        // dd("randomSentence->sentence", $randomSentence->sentence, "spaceCount", $spaceCount);



        return view('audioNko')->with('randomSentence', $randomSentence);
        // return view('progressHelper')->with('randomSentence', $randomSentence);
    }

    public function nkoShow()
    {
        $randomSentence = DB::table('nkosentences')->inRandomOrder()->first();
        return view('nko-version.audioNko')->with('randomSentence', $randomSentence);
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



        $nkoRegex = '/^[\x{07C0}-\x{07F9}\x{07FA}-\x{07FF}\s:\<>()؟.,"ߑ߸:."‹›،﴾﴿÷×_=%*°߹-]+$/u';


        $validation = $request->validate([
            'valeur0' => 'required|string|regex:/^[a-zA-Z0-9\/\r\n+]*={0,2}$/',
            'valeur1' => ['required', 'string', 'regex:'.$nkoRegex],
        ]);

        // $nkoRegex = '/^[\x{07C0}-\x{07F9}\x{07FA}-\x{07FF}\s:()؟-]+$/u';


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

        $audio_storage_path = "nko/audio-data/audio-".$audio_name.".wav";


        $audiotest = \Storage::disk('s3')->put($audio_storage_path, $binaryData);




        // Firebase - Firestore
        $sentenceRef = app('firebase.firestore')->database()->collection('audio')->newDocument();
        $sentenceRef->set([
            'audio_data' => $base64String,
            'texte_saisi' => $texteSaisi,
            'audio_name' => "audio-".$audio_name.".wav",
        ]);



        if (!empty($audio)) {
            return response()->json(['message' => 'Request processed successfully', 'next_nko_sentence' => $randomNkoSentence->sentence]);

        }
        return response()->json(['error' => "Erreur lors du chargement de l'audio"]);

    }


}
