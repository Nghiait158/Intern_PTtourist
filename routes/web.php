<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminManage;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\recruitmentController;
use App\Models\categories;

Route::get('/wel', function () {
    return view('welcome');
});
Route::get('/posts2', function () {
    return view('posts2');
});




// ---------------------------BackEnd---------------------------

// Route::get('/main', [HomeController::class, 'index']);
Route::get('/main', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

//--------------------------- Bài viết ---------------------------
Route::get('/managePosts', [PostsController::class, 'managePosts']);
Route::get('/addPosts', [PostsController::class, 'addPosts']);
Route::get('/editPosts/{postID}', [PostsController::class, 'editPosts','showCategory']);
// Route::get('/editPosts/{postID}', [PostsController::class, 'showPostInEdit']);
// Route::get('/showCategory/{postID}', [PostsController::class, 'showCategory']);

Route::post('/updatePosts/{postID}', [PostsController::class, 'updatePosts']);
Route::get('/deletePosts/{postID}', [PostsController::class, 'deletePosts']);
Route::post('/savePosts', [PostsController::class, 'savePosts']);
// Route::get('/form', [PostsController::class, 'showForm']);
// Route::post('/form', [PostsController::class, 'submitForm']);
Route::get('/searchPosts', [PostsController::class, 'search'])->name('posts.search');
//--------------------------- tài liệu---------------------------
Route::get('/doc', [DocController::class, 'index']);



// ---------------------------tuyển dụng -------------------------------
Route::get('/job_manage', [recruitmentController::class, 'job_manage']);
Route::get('/add_recruitments', [recruitmentController::class, 'add_recruitments']);
Route::post('/saveRecruitment', [recruitmentController::class, 'saveRecruitment']);




// -------------------------Hình ảnh------------------------------
Route::get('/add_ImgPage', [AdminManage::class, 'addImgPage']);
Route::get('/manageImgPage', [AdminManage::class, 'manageImgPage']);
Route::get('/', [AdminManage::class, 'UploadMethod']);
Route::post('/saveImgPage', [AdminManage::class, 'saveImgPage']);
Route::get('/deleteImgPage/{imgID}', [AdminManage::class, 'deleteImgPage']);
Route::get('/doc', [AdminManage::class, 'UploadMethod1']);
Route::get('/main', [AdminManage::class, 'UploadMethod2']);




// ----------------------------thể loại -------------------------------
Route::get('/manageCategories', [CategoriesController::class, 'manageCategories']);
Route::get('/addCategories', [CategoriesController::class, 'addCategories']);
Route::get('/editCategories/{categoryID}', [CategoriesController::class, 'editCategories']);
Route::post('/updateCategories/{categoryID}', [CategoriesController::class, 'updateCategories']);
Route::get('/deleteCategories/{categoryID}', [CategoriesController::class, 'deleteCategories']);
Route::post('/saveCategories', [CategoriesController::class, 'saveCategories']);




// ---------------------------------------------------
Route::get('/adminContent', [AdminManage::class, 'showAdminContent']);
// Route::get('/home', 'HomeController@index');



// ---------------------------login------------------------
Route::get('/admin_layout', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
