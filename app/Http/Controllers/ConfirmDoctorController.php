<?php

namespace App\Http\Controllers;

use App\Models\Dentist;
use Illuminate\Http\Request;

class ConfirmDoctorController extends Controller
{
   public function index()
   {
       $dentists = Dentist::where('active', 0)->get();
       return view('admin.confirmation.doctors', compact('dentists'));
   }
}
