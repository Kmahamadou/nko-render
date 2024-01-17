<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\audiocontroller;
use App\Http\Controllers\frenchcontroller;
use App\Http\Controllers\FrenchToNkocontroller;
use App\Http\Controllers\nkocontroller;
use App\Http\Controllers\homepagecontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/saisie', [audiocontroller::class, 'show']);
Route::post('/saisiepost', [audiocontroller::class, 'save']);
Route::post('/saisiepost', [audiocontroller::class, 'saveaudio']);


//////Frecnh only ////////////
Route::get('/frenchtext', [frenchcontroller::class, 'showFrenchTextPage'])->name('onlyFrenchText');
Route::post('/frenchtext', [frenchcontroller::class, 'saveFrenchText'])->name('saveFrenchText');
/////// End Frecnh Only /////////


//////Frecnh To NKO ////////////
Route::get('/frenchtonko', [FrenchToNkocontroller::class, 'showFrenchToNkoPage'])->name('showFrenchToNkoPage');
Route::post('/frenchtonko', [FrenchToNkocontroller::class, 'saveFrenchToNko'])->name('saveFrenchToNko');
/////// End Frecnh To NKO /////////



////// End NKO only ////////////
Route::get('/nkotext', [nkocontroller::class, 'showNkoText'])->name('showNkoText');
Route::post('/nkotext', [nkocontroller::class, 'saveNkoText'])->name('saveNkoText');
/////// End To NKO only /////////


Route::get('/homepage', [homepagecontroller::class, 'homepage'])->name('homepage');
// Route::get('/homepage', [homepagecontroller::class, 'homepage'])->name('homepage');
Route::get('/accueil', [homepagecontroller::class, 'mainpage'])->name('mainpage');



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('/record-audio', [vocalcontroller::class, 'recordAudio'])->name('record.audio');