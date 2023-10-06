<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
    public function dashboard()
    {
        return view('front.dentist-dashboard');
    }

    public function appointments()
    {
        return view('front.appointments');
    }

    public function myPatients()
    {
        return view('front.my-patients');
    }

    public function scheduleTimings()
    {
        return view('front.schedule-timings');
    }

    public function availableTimings()
    {
        return view('front.available-timings');
    }

    public function invoices()
    {
        return view('front.invoices');
    }

    public function invoiceView()
    {
        return view('front.invoice-view');
    }

    public function accounts()
    {
        return view('front.accounts');
    }



    public function reviews()
    {
        return view('front.reviews');
    }
    public function chatDoctor()
    {
        return view('front.chat-doctor');
    }

    public function doctorProfileSettings()
    {
        return view('front.doctor-profile-settings');
    }


    public function socialMedia()
    {
        return view('front.social-media');
    }

    public function doctorChangePassword()
    {
        return view('front.doctor-change-password');
    }





}
