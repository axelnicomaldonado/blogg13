<?php

use Illuminate\Support\Facades\Route;


/** return view('welcome') devolvería el archivo welcome.blade.php
 *  La ruta de la línea Route::get es la direccion de la URL.
 *  return view() es el archivo a retornar dentro de la carpeta view.
 *  Se pueden ver las rutas creadas con 'php artisan route:list' en la consola.
 *  
*/
Route::get('/', function () {
    return view('home');
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

//Route::get('/user', 'App\Http\Controllers\UserController@__invoke')-> name('user');