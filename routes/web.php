<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\postcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',[postcontroller::class,'index'])->name('posts');
Route::get('posts/create',[postcontroller::class,'create'])->name('posts.create');
Route::post('/posts/insert', [postcontroller::class, 'insert'])->name('posts.insert');
Route::get('/posts/view/{id}', [postcontroller::class, 'view_post'])->name('posts.view');
Route::get('/posts/edit/{id}', [postcontroller::class, 'edit_post'])->name('posts.edit');
Route::post('/posts/update/{id}', [postcontroller::class, 'update_post'])->name('posts.update');
Route::delete('/posts/delete/{id}', [postcontroller::class, 'delete_post'])->name('posts.delete');



