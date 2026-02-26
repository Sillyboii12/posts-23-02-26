<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/post/edit/{id}', [PostController::class, 'edit']);

Route::post('/post/edit/{id}', [PostController::class, 'update']);

Route::get('/post/delete/{id}', [PostController::class, 'delete']);

Route::post('/post/delete/{id}', [PostController::class, 'destroy']);

