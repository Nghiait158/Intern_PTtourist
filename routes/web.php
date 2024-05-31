<?php

use App\Http\Controllers\admin\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});
Route::get('/cut', function () {
    return view('cut');
});

Route::get('/main', function () {
    return view('main');
});


Route::get('/admin/login', [AdminLoginController::class,'index'])->name('admin.login');