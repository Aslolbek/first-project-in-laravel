<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::resources([
    'posts'=> PostController::class,
    'comments'=> CommentController::class,
]);






// Route::get('posts', [PageController::class, 'index'])->name('post.index');

// Route::post('posts/create', [PageController::class, 'create'])->name('post.create');

// Route::get('posts/create', [PageController::class, 'store'])->name('post.store');

// Route::get('posts/{post}', [PageController::class, 'show'])->name('post.show');

// Route::get('posts/{post}/edit', [PageController::class, 'edit'])->name('post.edit');

// Route::put('posts/{post}/edit', [PageController::class, 'update'])->name('post.update');
// Route::delete('posts/{post}/delete', [PageController::class, 'destroy'])->name('post.destroy');






