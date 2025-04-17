<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;

// Ruta para la landing page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Ruta para el formulario de contacto
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::prefix('admin/productos')->group(function () {
    Route::get('/', [ProductoController::class, 'index'])->name('admin.productos.index');
    Route::get('/crear', [ProductoController::class, 'create'])->name('admin.productos.create');
    Route::post('/', [ProductoController::class, 'store'])->name('admin.productos.store');
    Route::delete('/{producto}', [ProductoController::class, 'destroy'])->name('admin.productos.destroy');
});

Route::get('/admin/productos/index', [ProductoController::class, 'index'])->name('admin.productos');


// Route::get('/', function () {
//     return view('welcome');
// });


