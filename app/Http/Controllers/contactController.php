<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Jobs\ProcessVisiterEmail;


class contactController extends Controller
{
    //
    public function sendVisiterEmail(Request $request)
    {
       $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'visiterEmail' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:65655',
        ]);

        // dd($validatedData);

            // $emailSent = ProcessVisiterEmail::dispatch($validatedData);
            dispatch(new ProcessVisiterEmail($validatedData));

            // if ($emailSent) {
                // Session::put('emailSentSuccess', 'Email envoye avec succes !');


        // if (!empty($audio)) {
            return response()->json(['message' => 'Request processed successfully'],200);

        // }

                // return redirect()->route('homepage')->with('emailSentSuccess', "Email envoye avec succes !");
            // }

            // return redirect()->route('homepage')->with('emailSentError' , "Un probleme est survenu lors de l'envois, reessayer svp !");



    }
}
