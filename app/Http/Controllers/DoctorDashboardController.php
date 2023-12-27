<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorDashboardController extends Controller
{
    public function dashboard()
    {
        return view('front.dentist-dashboard');
    }

    public function appointments()
    {
        $appointments = Appointment::with('patient')
            ->where('dentist_id',  Auth::guard('dentist')->user()->id )
            ->get();

        return view('front.appointments', compact('appointments'));
    }

    public function patientProfile($id)
    {
        $patient = Patient::with('appointments')->where('id', $id)->first();
        return view('front.patient-profile', compact('patient'));
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
    public function workHour()
    {
        return view('front.work-hours');
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
