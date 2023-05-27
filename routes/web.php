<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\Forums;
use App\Http\Controllers\ForumController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/forum-create',[ForumController::class,'create']);
Route::get('/questions/delete/{id}',function($id){
    $question = Questions::find($id);
    $question->answer()->delete();
    $question->delete();
    // dd($question);
    return '';
});
Route::get('/forums/question/{id}',function($id){
    $forum=Forums::first();
    $questions=$forum->question()->get();
    dd($questions);
    return '';  
});