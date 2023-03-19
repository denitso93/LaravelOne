<?php

Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::get('blog/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('blog', [BlogController::class, 'store'])->name('blog.store');
Route::put('blog/{post}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('blog/{post}', [BlogController::class, 'delete'])->name('blog.delete');

//Route::post('blog/{post}comments', CommentController::class);
