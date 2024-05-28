<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/** return view('welcome') devolvería el archivo welcome.blade.php
 *  La ruta de la línea Route::get es la direccion de la URL.
 *  return view() es el archivo a retornar dentro de la carpeta view.
 *  Se pueden ver las rutas creadas con 'php artisan route:list' en la consola.
 *  
*/
Route::get('/', function () {
    return view('welcome');    //Cambiar dirección a home cuando esté hecho XD
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return 'Logout usuario';
});

Route::get('/category', function () {
    return view('category.index');
});

Route::get('/category/show/{id}', function () {
    return view('category.show');
});

Route::get('/category/create', function () {
    return view('category.create');
});

Route::get('/category/edit/{id}', function () {
    return view('category.edit');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
