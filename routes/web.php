<?php


use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [SurveyController::class, 'create'])->name('home');
//Route::get('/results', [SurveyController::class, 'index'])->name('results');
//Route::post('/store',[SurveyController::class,'store']);

Route::resource('survey',SurveyController::class);
