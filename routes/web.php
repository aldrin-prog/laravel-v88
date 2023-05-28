<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookmarkController;
use App\Models\Bookmark;
Route::get('/', function () {
    $bookmarks=Bookmark::all();
    return view('welcome',['bookmarks'=>$bookmarks]);
});
Route::get('/destroy/{id}',[BookmarkController::class,'destroy'])->name('destroy');
Route::post('/submit',[BookmarkController::class,'submit'])->name('submit');
Route::delete('/delete/{id}',[BookmarkController::class,'delete'])->name('bookmark.delete');
