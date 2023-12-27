<?php

use App\Http\Controllers\api\VueComponentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('time-slots', [\App\Http\Controllers\TimeSlotController::class, 'index']);
Route::post('submit-appointment-form', [\App\Http\Controllers\AppointmentController::class, 'store']);
Route::get('specialties', [VueComponentController::class, 'fetchSpecialties']);
Route::get('doctors', [VueComponentController::class, 'doctors']);
