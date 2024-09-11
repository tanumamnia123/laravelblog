<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/register', [RegisterController::class, 'registerForm'])->name('register');




Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/insert', [PostController::class, 'insert'])->name('posts.insert');
Route::get('/posts/view/{post}', [PostController::class, 'viewPost'])->name('posts.view');
Route::get('/posts/edit/{id}', [PostController::class, 'editPost'])->name('posts.edit');
Route::post('/posts/update/{id}', [PostController::class, 'updatePost'])->name('posts.update');
Route::delete('/posts/delete/{id}', [PostController::class, 'deletePost'])->name('posts.delete');

