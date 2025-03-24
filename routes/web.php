<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', [UtilisateurController::class, 'index'])->name('utilisateurs.index');
Route::get('/students/create', [UtilisateurController::class, 'create'])->name('utilisateurs.create');
Route::post('/students', [UtilisateurController::class, 'store'])->name('utilisateurs.store');
Route::get('/students/{id}', [UtilisateurController::class, 'show'])->name('utilisateurs.show');
Route::get('/students/{id}/edit', [UtilisateurController::class, 'edit'])->name('utilisateurs.edit');
Route::put('/students/{id}', [UtilisateurController::class, 'update'])->name('utilisateurs.update');
Route::delete('/students/{id}', [UtilisateurController::class, 'destroy'])->name('utilisateurs.destroy');
