<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\frenchsentence;
use App\Models\FrenchToNko;
use Illuminate\Support\Facades\DB;

class MultipleSentenceInputController extends Controller
{
    //



    public function multipleFrenchSentenceInsertion(Request $request)
    {
        $sentences = $request->input('sentences');
        // Log::info($sentences);

        // Validate or sanitize the input if necessary

        // Insert sentences into the database
        foreach ($sentences as $sentence) {
            // Assuming you have a "sentences" table with a "content" column
            frenchsentence::create(['sentence' => $sentence]);
            // Log::info($sentence);
        }

        return response()->json(['message' => 'Sentences inserted successfully'], 200);
    }

}
