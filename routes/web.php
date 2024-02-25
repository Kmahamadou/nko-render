<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\audiocontroller;
use App\Http\Controllers\frenchcontroller;
use App\Http\Controllers\FrenchToNkocontroller;
use App\Http\Controllers\nkocontroller;
use App\Http\Controllers\homepagecontroller;
use App\Http\Controllers\contactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homepagecontroller::class, 'homepage'])->name('homepage');
Route::get('/nko', [homepagecontroller::class, 'nkoHomepage'])->name("nkoHomepage");

Route::get('/audio-nko', [audiocontroller::class, 'show'])->name("audioNko");
Route::get('/nko/audio-nko', [audiocontroller::class, 'nkoShow'])->name("showAudioNko");

// Route::get('/enregistrement-nko', [audiocontroller::class, 'recording'])->name("nkoRecording");
// Route::post('/saisiepost', [audiocontroller::class, 'save']);
// Route::post('/enregistrement-audio-nko', [audiocontroller::class, 'saveaudio'])->name("audioNko");


//////Frecnh only ////////////
Route::get('/frenchtext', [frenchcontroller::class, 'showFrenchTextPage'])->name('onlyFrenchText');
Route::get('/nko/frenchtext', [frenchcontroller::class, 'showNkoFrenchTextPage'])->name('nkoOnlyFrenchText');
/////// End Frecnh Only /////////


//////Frecnh To NKO ////////////
Route::get('/frenchtonko', [FrenchToNkocontroller::class, 'showFrenchToNkoPage'])->name('showFrenchToNkoPage');
Route::get('/nko/frenchtonko', [FrenchToNkocontroller::class, 'showNkoFrenchToNkoPage'])->name('showNkoFrenchToNkoPage');
/////// End Frecnh To NKO /////////



////// End NKO only ////////////
Route::get('/nkotext', [nkocontroller::class, 'showNkoText'])->name('showNkoText');
Route::get('/nko/nkotext', [nkocontroller::class, 'showNkoNkoText'])->name('showNkoNkoText');
/////// End To NKO only /////////


// Route::get('/homepage', [homepagecontroller::class, 'homepage'])->name('homepage');
// Route::get('/accueil', [homepagecontroller::class, 'mainpage'])->name('mainpage');



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('/record-audio', [vocalcontroller::class, 'recordAudio'])->name('record.audio');
