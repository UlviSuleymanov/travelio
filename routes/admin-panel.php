<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\MarqueeController;
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
Route::get('/', function () {
    // Eger admin log in olubsa ve seasiya qalibsa dashboarda don
    if (auth('admin')->check()) {
        return redirect()->route('admin.dashboard');
    }
    // Login olmayibsa autha gonder.
    return redirect()->route('auth.login');
})->name('admin.home');

Route::prefix("/auth")->name('auth.')->group(function () {
    Route::get("/", function (){
       return redirect()->route('auth.login') ;
    })->name('home');
    Route::get("/login", [AuthController::class, 'getLogin'])->name("login");
    Route::post("/login", [AuthController::class, 'postLogin'])->name("login.post");
    Route::get("/signup", [AuthController::class, 'signUp'])->name('signup');
    Route::post("/signup", [AuthController::class, 'signUpPost'])->name('signup.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth:admin'])->prefix('/')->name("admin.")->group(function () {
    //dashboard
    Route::get("/dashboard", [AdminController::class, "dashboard"])->name("dashboard");
    //slider
    Route::get('/statics/sliders/manage', [SliderController::class, 'sliderManage'])->name('slider-manage');
    Route::get('/statics/slider/add', [SliderController::class, 'sliderAdd'])->name('slider-add');
    Route::post('/statics/slider/add', [SliderController::class, 'sliderAddPost'])->name('slider-addPost');
    Route::match(['get', 'post'], '/statics/slider/{id}/edit', [SliderController::class, 'sliderEdit'])->name('slider-edit');
    Route::delete('/statics/slider/{id}/delete', [SliderController::class, 'sliderDelete'])->name('slider-delete');
    //Marquee
    Route::get('statics/marquee/manage',[MarqueeController::class,'manage'])->name('marquee-manage');
    Route::get('statics/marquee/add',[MarqueeController::class,'add'])->name('marquee-add');
    Route::post('statics/marquee/add',[MarqueeController::class,'addPost'])->name('marquee-addPost');
    Route::match(['get','post'],'/statics/marquee/{id}/edit',[MarqueeController::class,'edit'])->name('marquee-edit');
    Route::delete('/statics/marquee/{id}/delete',[MarqueeController::class,'delete'])->name('marquee-delete');
    //Blogs
    Route::get('/blogs/manage', [BlogController::class, "blogsManage"])->name('blogs-manage');
    Route::get('/blogs/add', [BlogController::class, "blogsAdd"])->name('blogs-add');
    Route::post('/blogs/add', [BlogController::class, "blogsAddPost"])->name('blogs-addPost');
    Route::match(['get', 'post'], '/admin/blogs/{id}/edit', [BlogController::class, 'editOrUpdate'])->name('blogs-edit');
    Route::delete('/blogs/delete/{id}', [BlogController::class, 'blogsDelete'])->name('blogs-delete');
    Route::post('/admin/blogs/{id}/status', [BlogController::class, 'updateStatus'])->name('blogs-updateStatus');

});
