<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hello;
use App\Http\Controllers\etudiant;
use App\Http\Controllers\index;

/*Mes trois routes que j'ai ajouté pour le moment */

Route::get('/', [index::class, 'index'])->name('home');
Route::get('/hello', [hello::class, 'Bonjour'])->name('hello');
Route::get('/etudiant', [etudiant::class, 'etudiants'])->name('etudiant');
Route::post('/etudiant', [etudiant::class, 'saluer'])->name('etudiant.saluer');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});


require __DIR__.'/settings.php';
