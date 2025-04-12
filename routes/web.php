<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DetalleVentas;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Usuarios;
use App\Http\Controllers\Ventas;
use App\Models\Categoria;
use Illuminate\Support\Facades\Route;

// crear un usuario administrador, solo usar una vez
//Route::get('/crear-administrador', [AuthController::class, 'crearAdministrador']);


Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');

// middleware auth autentifica a un grupo de rutas y las protege para que no se puedan ingresar si un usuario no esta logeado
Route::middleware("auth")->group(function(){
    Route::get('/home', [Dashboard::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


// Prefijo para todas las rutas que tengan que ver con ventas
Route::prefix('ventas')->middleware("auth")->group(function(){
    Route::get('/nueva-venta', [Ventas::class, 'index'])->name('ventas-nueva');
});

// Prefijo para todas las rutas que tengan que ver con detalle de ventas
Route::prefix('detalle')->middleware("auth")->group(function(){
    Route::get('/detalle-venta', [DetalleVentas::class, 'index'])->name('detalle-venta');
});

// Prefijo para todas las rutas que tengan que ver con categorias
Route::prefix('categorias')->middleware("auth")->group(function(){
    Route::get('/', [Categorias::class, 'index'])->name('categorias');
    Route::get('/create', [Categorias::class, 'create'])->name('categorias.create');
    Route::post('/store', [Categorias::class, 'store'])->name('categorias.store');
    Route::get('/show/{id}', [Categorias::class, 'show'])->name('categorias.show');
    Route::get('/edit/{id}', [Categorias::class, 'edit'])->name('categorias.edit');
    Route::put('/update/{id}', [Categorias::class, 'update'])->name('categorias.update');
    Route::delete('/destroy/{id}', [Categorias::class, 'destroy'])->name('categorias.destroy');
});

// Prefijo para todas las rutas que tengan que ver con productos
Route::prefix('productos')->middleware("auth")->group(function(){
    Route::get('/', [Productos::class, 'index'])->name('productos');
});

// Prefijo para todas las rutas que tengan que ver con clientes
Route::prefix('clientes')->middleware("auth")->group(function(){
    Route::get('/', [Clientes::class, 'index'])->name('clientes');
});

// Prefijo para todas las rutas que tengan que ver con usuarios
Route::prefix('usuarios')->middleware("auth")->group(function(){
    Route::get('/', [Usuarios::class, 'index'])->name('usuarios');
});


