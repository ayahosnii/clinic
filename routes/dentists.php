<?php

use App\Http\Controllers\DoctorDashboardController;



Route::group(['prefix'=> 'dentist'], function(){
    Route::get('/dashboard', [DoctorDashboardController::class, 'dashboard'])->name('dentist.dashboard');
    Route::get('/appointments', [DoctorDashboardController::class, 'appointments'])->name('dentist.appointments');
    Route::get('/patient-profile/{id}', [DoctorDashboardController::class, 'patientProfile'])->name('dentist.patient-profile');
    Route::get('/my-patients', [DoctorDashboardController::class, 'myPatients'])->name('dentist.my-patients');
    Route::get('/schedule-timings', [DoctorDashboardController::class, 'scheduleTimings'])->name('dentist.schedule-timings');
    Route::get('/available-timings', [DoctorDashboardController::class, 'availableTimings'])->name('dentist.available-timings');
    Route::get('/work-hours', [DoctorDashboardController::class, 'workHour'])->name('dentist.available-timings');
    Route::get('/invoices', [DoctorDashboardController::class, 'invoices'])->name('dentist.invoices');
    Route::get('/invoice-view', [DoctorDashboardController::class, 'invoiceView'])->name('dentist.invoice-view');
    Route::get('/accounts', [DoctorDashboardController::class, 'accounts'])->name('dentist.accounts');
    Route::get('/reviews', [DoctorDashboardController::class, 'reviews'])->name('dentist.reviews');
    Route::get('/chat-doctor', [DoctorDashboardController::class, 'chatDoctor'])->name('dentist.chat-doctor');
    Route::get('/doctor-profile-settings', [DoctorDashboardController::class, 'doctorProfileSettings'])->name('dentist.doctor-profile-settings');
    Route::get('/social-media', [DoctorDashboardController::class, 'socialMedia'])->name('dentist.social-media');
    Route::get('/doctor-change-password', [DoctorDashboardController::class, 'doctorChangePassword'])->name('dentist.doctor-change-password');



});
