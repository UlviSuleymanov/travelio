<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::prefix("/auth")->name('auth.')->group(function () {

    Route::get("/login",[AuthController::class,'getLogin'])->name("login");
    Route::post("/login",[AuthController::class,'postLogin'])->name("login.post");
    Route::get("/signup",[AuthController::class, 'signUp'])->name('signup');
    Route::post("/signup",[AuthController::class, 'signUpPost'])->name('signup.post');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});

Route::middleware(['auth:admin'])->prefix('/')->name("admin.")->group(function (){
   Route::get("/dashboard",[AdminController::class,"dashboard"])->name("dashboard");
   Route::get('/blogs/manage',[AdminController::class,"blogsManage"])->name('blogs-manage');
   Route::get('/blogs/add',[AdminController::class,"blogsAdd"])->name('blogs-add');
   Route::post('/blogs/add',[AdminController::class,"blogsAddPost"])->name('blogs-addPost');
   Route::get('/blogs/edit',[AdminController::class,"blogsEdit"])->name('blogs-edit');
   Route::post('/blogs/edit',[AdminController::class,"blogsEditPost"])->name('blogs-editPost');
});
