<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/game',[QuestionController::class,'game'])->name('game');
Route::post('/check',[QuestionController::class,'check'])->name('check');
Route::get('/correct',[QuestionController::class,'correct'])->name('correct');
Route::get('/fail',[QuestionController::class,'fail'])->name('fail');
