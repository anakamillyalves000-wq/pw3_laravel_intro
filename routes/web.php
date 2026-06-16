<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\OficinaController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');
Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');

Route::get('/oficinas',[OficinaController::class, 'index'])-> name('oficinas.index');
Route::post('/oficinas',[OficinaController::class,'store'])-> name('oficinas.store');
