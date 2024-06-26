<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getHome'])->name('index');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return 'Logout usuario';
});

Route::get('/category', [CategoryController::class, 'getIndex'])->name('category');
Route::get('/category/type/{id}', [CategoryController::class, 'getType']);

Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);

Route::get('/category/create', [CategoryController::class, 'getCreate']);
Route::post('/category/create', [CategoryController::class, 'store']);

Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);
Route::put('/category/edit/{id}', [CategoryController::class, 'update']);


Route::get('register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisteredUserController::class, 'register']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('{username}', [ProfileController::class, 'show'])->name('profile.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/{username}', [ProfileController::class, 'show'])->name('profile.show');

});



require __DIR__.'/auth.php';
