<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminManage;

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

// Bài viết 
Route::get('/managePosts', [PostsController::class, 'managePosts']);
Route::get('/addPosts', [PostsController::class, 'addPosts']);
Route::post('/savePosts', [PostsController::class, 'savePosts']);

// tài liệu
Route::get('/doc', [DocController::class, 'index']);

// Route::get('/adminContent', 'AdminManage@showAdminContent');
Route::get('/adminContent', [AdminManage::class, 'showAdminContent']);
// Route::get('/home', 'HomeController@index');
Route::get('/admin_layout', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
