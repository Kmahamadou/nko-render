<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\audiocontroller;
use App\Http\Controllers\contactController;
use App\Http\Controllers\frenchcontroller;
use App\Http\Controllers\FrenchToNkocontroller;
use App\Http\Controllers\nkocontroller;
use App\Http\Controllers\MultipleSentenceInputController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('/saveaudio', [audiocontroller::class, 'saveaudio']);
Route::post('/enregistrement-audio-nko', [audiocontroller::class, 'saveAudio'])->name("saveAudioNko");

Route::post('/nkotext', [nkocontroller::class, 'saveNkoText'])->name('saveNkoText');
Route::post('/frenchtext', [frenchcontroller::class, 'saveFrenchText'])->name('saveFrenchText');
Route::post('/multipleFrenchSentenceInsertion', [MultipleSentenceInputController::class, 'multipleFrenchSentenceInsertion'])->name('multipleFrenchSentenceInsertion');
Route::post('/frenchtonko', [FrenchToNkocontroller::class, 'saveFrenchToNko'])->name('saveFrenchToNko');
Route::post('/send-visiter-email', [contactController::class, 'sendVisiterEmail'])->name("sendVisiterEmail");
