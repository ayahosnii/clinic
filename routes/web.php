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

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ServiceController;


Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/find-doctor', [TeamController::class, 'findDoctor'])->name('find.doctor');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/price', [PriceController::class, 'index'])->name('price');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');
Route::get('/choose-date', [AppointmentController::class, 'chooseDate'])->name('appointment.chooseDate');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::group(['prefix'=> 'dentist'], function(){
Route::get('/register', [RegisterController::class, 'index'])->name('dentist.register');
Route::post('/register', [RegisterController::class, 'store'])->name('dentist.register.store');
Route::get('/login', [LoginController::class, 'index'])->name('dentist.login');
Route::post('/dentist/login', [LoginController::class, 'login'])->name('dentist.login.store');
});
