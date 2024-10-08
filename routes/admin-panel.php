<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\StaticsController;
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
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});

Route::middleware(['auth:admin'])->prefix('/')->name("admin.")->group(function (){
    //dashboard
   Route::get("/dashboard",[AdminController::class,"dashboard"])->name("dashboard");
   //Blogs
   Route::get('/blogs/manage',[BlogController::class,"blogsManage"])->name('blogs-manage');
   Route::get('/blogs/add',[BlogController::class,"blogsAdd"])->name('blogs-add');
   Route::post('/blogs/add',[BlogController::class,"blogsAddPost"])->name('blogs-addPost');
   Route::match(['get', 'post'], '/admin/blogs/{id}/edit', [BlogController::class, 'editOrUpdate'])->name('blogs-edit');
   Route::delete('/blogs/delete/{id}', [BlogController::class, 'blogsDelete'])->name('blogs-delete');
   Route::post('/admin/blogs/{id}/status', [BlogController::class, 'updateStatus'])->name('blogs-updateStatus');
    //slider
   Route::get('/statics/sliders/manage',[StaticsController::class,'sliderManage'])->name('slider-manage');
   Route::get('/statics/slider/add',[StaticsController::class,'sliderAdd'])->name('slider-add');
   Route::post('/statics/slider/add',[StaticsController::class,'sliderAddPost'])->name('slider-addPost');
   Route::match(['get', 'post'], '/statics/slider/{id}/edit', [StaticsController::class, 'sliderEdit'])->name('slider-edit');
   Route::match(['get', 'post'], '/statics/slider/{id}/delete', [StaticsController::class, 'sliderDelete'])->name('slider-delete');
});
