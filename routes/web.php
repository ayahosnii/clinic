<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
