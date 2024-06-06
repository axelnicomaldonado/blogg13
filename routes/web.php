<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/** return view('welcome') devolvería el archivo welcome.blade.php
 *  La ruta de la línea Route::get es la direccion de la URL.
 *  return view() es el archivo a retornar dentro de la carpeta view.
 *  Se pueden ver las rutas creadas con 'php artisan route:list' en la consola.
 *  
*/
Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return 'Logout usuario';
});

Route::get('/category', [CategoryController::class, 'getIndex']);

Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);

Route::get('/category/create', [CategoryController::class, 'getCreate']);

Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);
Route::put('/category/edit/{id}', [CategoryController::class, 'update']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
