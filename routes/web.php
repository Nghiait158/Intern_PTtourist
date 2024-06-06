<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocController;
use App\Http\Controllers\PostsController;

Route::get('/wel', function () {
    return view('welcome');
});
Route::get('/posts2', function () {
    return view('posts2');
});




// BackEnd

// Route::get('/main', [HomeController::class, 'index']);
Route::get('/main', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/posts', [PostsController::class, 'index']);


Route::get('/doc', [DocController::class, 'index']);


// Route::get('/home', 'HomeController@index');
Route::get('/admin_layout', function () {
    return view('admin/admin_layout');
})->middleware(['auth', 'verified'])->name('admin_layout');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
