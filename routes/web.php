<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController; // Importe o controlador de registro se estiver utilizando
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rota para o registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rota para o home/dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Rota para redirecionar após login bem-sucedido
Route::get('/home', function () {
    return view('home'); // Substitua 'dashboard' pelo nome da sua view de dashboard
})->middleware(['auth'])->name('home');


