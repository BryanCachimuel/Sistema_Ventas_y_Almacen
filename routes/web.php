<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DetalleVentas;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Usuarios;
use App\Http\Controllers\Ventas;
use Illuminate\Support\Facades\Route;

// crear un usuario administrador, solo usar una vez
Route::get('/crear-administrador', [AuthController::class, 'crearAdministrador']);

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');

Route::get('/home', [Dashboard::class, 'index'])->name('home');

// Prefijo para todas las rutas que tengan que ver con ventas
Route::prefix('ventas')->group(function(){
    Route::get('/nueva-venta', [Ventas::class, 'index'])->name('ventas-nueva');
});

// Prefijo para todas las rutas que tengan que ver con detalle de ventas
Route::prefix('detalle')->group(function(){
    Route::get('/detalle-venta', [DetalleVentas::class, 'index'])->name('detalle-venta');
});

// Prefijo para todas las rutas que tengan que ver con categorias
Route::prefix('categorias')->group(function(){
    Route::get('/', [Categorias::class, 'index'])->name('categorias');
});

// Prefijo para todas las rutas que tengan que ver con productos
Route::prefix('productos')->group(function(){
    Route::get('/', [Productos::class, 'index'])->name('productos');
});

// Prefijo para todas las rutas que tengan que ver con clientes
Route::prefix('clientes')->group(function(){
    Route::get('/', [Clientes::class, 'index'])->name('clientes');
});

// Prefijo para todas las rutas que tengan que ver con usuarios
Route::prefix('usuarios')->group(function(){
    Route::get('/', [Usuarios::class, 'index'])->name('usuarios');
});


