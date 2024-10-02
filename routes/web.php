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

Route::get("/", [HomeController::class, "index"])->name("home");


Route::prefix("/{az}")->name('site.')->group(function () {
    Route::get("/about", [PagesController::class, "about"])->name("about");
    Route::get("/contact", [PagesController::class, "contact"])->name("contact");
    Route::post("/contact-form", [PagesController::class, "contactForm"])->name("contact.form");
    Route::get("/blog", [BlogsController::class, "index"])->name("blog");
    Route::get("/blog-detail/{slug}", [BlogsController::class, "single"])->name("blog.single");

});

// Email verification routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
