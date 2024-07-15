<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MostrarUsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlmoxController;

// Rota inicial redireciona para login
Route::get('/', function () {
    return redirect('/home');
});

// Rotas de autenticação
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rota de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.usuarios');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Rota para redirecionamento após login bem-sucedido
Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

// Rota Listar Usuarios
Route::get('/listar-usuarios', [MostrarUsuariosController::class, 'index'])->name('listar.usuarios');

// Rota Editar Usuarios
Route::get('/usuarios/{id}/editar', [MostrarUsuariosController::class, 'edit'])->name('usuarios.editar');
Route::put('/usuarios/{id}', [MostrarUsuariosController::class, 'update'])->name('usuarios.update');

// Rota para Listar Almoxarifado
Route::get('/almoxarifado', [AlmoxController::class, 'index'])->name('listar.almoxarifado');

// Rota para Editar Almoxarifado
Route::get('/almox/{id}/edit', [AlmoxController::class, 'edit'])->name('almox.edit');
Route::put('/almox/{id}', [AlmoxController::class, 'update'])->name('almox.update');

// Rotas para Cadastrar Almoxarifado
Route::get('/almoxarifado/create', [AlmoxController::class, 'create'])->name('almox.create');
Route::post('/almoxarifado', [AlmoxController::class, 'store'])->name('almox.store');