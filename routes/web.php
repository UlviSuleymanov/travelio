<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\PagesController;
use App\Http\Controllers\front\BlogsController;
use App\Http\Middleware\Language;

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


Route::prefix("/")->name('site.')->group(function () {
    Route::get("/", [HomeController::class, "index"])->name("home");
    Route::get("/about", [PagesController::class, "about"])->name("about");
    Route::get("/contact", [PagesController::class, "contact"])->name("contact");
    Route::post("/contact-form", [PagesController::class, "contactForm"])->name("contact.form");
    Route::get("/blog", [BlogsController::class, "index"])->name("blog");
    Route::get("/blog/{slug}", [BlogsController::class, "single"])->name("blog-single");
});
