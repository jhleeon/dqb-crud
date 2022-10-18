<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[StudentController::class,'home'])->name('student.home');
Route::post('/',[StudentController::class,'create'])->name('student.create');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::put('/edit/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
