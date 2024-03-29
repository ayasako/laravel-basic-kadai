<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RequestController;

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

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/posts', [PostController::class, 'index']);

 Route::get('/posts/{id}', [PostController::class, 'show']);

 Route::get('/posts/create', [RequestController::class, 'create']);
 
 Route::post('/posts/store', [RequestController::class, 'store'])->name('posts.store');