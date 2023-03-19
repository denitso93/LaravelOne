<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Posts\CommentController;
use Illuminate\Support\Facades\Route;


Route:: view('/', 'welcome');

Route::redirect('/home', '/');


// Auth route
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');

// User Route
Route::prefix('user')->group(function () {
  Route::get('posts', [PostController::class, 'index'])->name('user.posts');
  Route::get('posts/create', [PostController::class, 'create'])->name('user.posts.create');
  Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');
  Route::post('posts', [PostController::class, 'store'])->name('user.posts.store');
  Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update');
  Route::delete('posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete');
});

// CRUD operations
// For posts
Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}', [PostController::class, 'delete'])->name('posts.delete');

Route::post('posts/{post}comments', CommentController::class)->only([
    'index', 'show',
]);

//Route::resource('posts', PostController::class);

Route::get('blog', BlogController::class);

// For catalog
//Route::get('catalog', [PostController::class, 'index'])->name('catalog.index');
//Route::get('catalog/create', [PostController::class, 'create'])->name('catalog.create');
