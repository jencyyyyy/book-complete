<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',action: [BookController::class,'index'])->name('books.index');

Route::get('/{id}/show',action: [BookController::class,'show'])->name('books.show');

Route::get('/create',action: [BookController::class,'create'])->name('books.create');

Route::post('/store',action: [BookController::class,'store'])->name('books.store');

Route::delete('/{id}/delete',[BookController::class,'destroy'])->name('books.destroy');


