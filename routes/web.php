<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
Route::get('/table',[PostController::class, 'table'])->name('post.table');
Route::get('/create',[PostController::class, 'create'])->name('post.create');
Route::get('/edit{post}',[PostController::class, 'edit'])->name('post.edit');
