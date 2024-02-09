<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Jobs\ProcessVisiterEmail;
use App\Mail\VisiterEmail;


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

            $mailResult = Mail::to("mohamerou01@gmail.com")->send(new VisiterEmail($this->emailContent));
            // Check if the email was sent successfully
            if ($mailResult) {
                return response()->json(['message' => 'Merci de nous avoir contacter'],200);
            } else {
                return response()->json(['error' => 'Une erreur est survenue lors de l\'envois !'],500);
            }
            // dispatch(new ProcessVisiterEmail($validatedData));


    }
}
