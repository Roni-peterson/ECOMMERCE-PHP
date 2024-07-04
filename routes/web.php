<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MostrarUsuariosController;


// Rota inicial redireciona para login
Route::get('/', function () {
    return redirect('/login');
});

// Rotas de autenticação
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rota de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rota home/dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware(['auth']);

// Rota para redirecionamento após login bem-sucedido
Route::get('/home', function () {
    return view('home'); // Substitua 'dashboard' pelo nome da sua view de dashboard
})->middleware(['auth'])->name('home');

// Rota Listar Usuarios
Route::get('/listar-usuarios', [MostrarUsuariosController::class, 'index'])->name('listar.usuarios');

//Rota Editar Usuarios
Route::get('/usuarios/{id}/editar', [MostrarUsuariosController::class, 'edit'])->name('usuarios.editar');
Route::put('/usuarios/{id}', [MostrarUsuariosController::class, 'update'])->name('usuarios.update');

