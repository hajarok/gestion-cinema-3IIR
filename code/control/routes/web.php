<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CategoryController;


// Page d'accueil
Route::get('/', [AuthController::class, 'index'])->name('index');

// Formulaire d'inscription
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
// Soumettre le formulaire d'inscription
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Formulaire de connexion
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
// Soumettre le formulaire de connexion
Route::post('/login', [AuthController::class, 'login'])->name('login');


// Page des catégories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

// Pages spécifiques pour chaque thème
Route::get('/categories/{theme}', [CategoryController::class, 'show'])->name('categories.show');


