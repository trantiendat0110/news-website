<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('auth.admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('Home');

    Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/comments', [HomeController::class, 'index']);

    Route::get('/categories', [CategoryController::class, 'index']);

    Route::post('/categories', [CategoryController::class, 'create'])->name('create.category');

    Route::post('/categories/delete', [CategoryController::class, 'delete'])->name('delete.category');

    Route::get('/accounts', [CategoryController::class, 'index']);

    Route::get('/posts', [NewController::class, 'get_all']);

    Route::post('/posts', [NewController::class, 'create'])->name('create.post');

    Route::post('/posts/delete', [NewController::class, 'delete'])->name('delete.post');

    Route::get('/posts/{id}', [NewController::class, 'getById']);

    Route::get('/posts/category/{category}', [NewController::class, 'getByCategory']);
});

Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');

Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');