<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('user.pages.index');
// });

Route::get('/post/{id}', [HomeController::class, 'post'])->name('post');
Route::get('/', [HomeController::class, 'articles'])->name('articles');
Route::get('/recentsPosts', [HomeController::class, 'recentsPosts'])->name('recentsPosts');
Route::get('/postsByCategories{id}', [HomeController::class, 'postsByCategories'])->name('postsByCategories');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
