<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario\UsuarioController;
<<<<<<< HEAD
use App\Http\Controllers\Equipo\EquipoController;
=======
use App\Http\Controllers\Vehiculo\VehiculoController;
>>>>>>> 0633b3863b0f0aad120dd9cd409f7c164054a7fb

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

<<<<<<< HEAD
    Route::resource('equipo', EquipoController::class)->names('equipo');

    // Rutas de usuario (index, create, store, edit, update, destroy, etc.)
=======
    // Usuarios
>>>>>>> 0633b3863b0f0aad120dd9cd409f7c164054a7fb
    Route::resource('usuario', UsuarioController::class)->names('usuario');

    // Ruta AJAX: buscar usuario por número de documento
    Route::get('/usuarios/buscar-por-documento', [UsuarioController::class, 'buscarPorDocumento'])
        ->name('usuarios.buscarDocumento');

    // Vehículos
    Route::resource('vehiculos', VehiculoController::class)->names('vehiculos');
});
