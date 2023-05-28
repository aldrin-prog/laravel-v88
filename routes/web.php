<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/employee',[EmployeeController::class,'index'])->name('employee');
Route::get('/employee/show/{id}',[EmployeeController::class,'show'])->name('show');
Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('edit');
Route::get('/employee/new',[EmployeeController::class,'new'])->name('new');
Route::get('/employee/delete/{id}',[EmployeeController::class,'destroy'])->name('delete');
Route::patch('/employee/patch/{id}',[EmployeeController::class,'patch'])->name('patch');
Route::post('/employee/add',[EmployeeController::class,'add'])->name('add');
Route::get('/goback',[EmployeeController::class,'goback'])->name('goback');