<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Dentist;
use Illuminate\Http\Request;

class ConfirmDoctorController extends Controller
{
   public function index()
   {
       $dentists = Dentist::where('active', 0)->get();
       return view('admin.confirmation.doctors', compact('dentists'));
   }

    public function cancel(Request $request, $id)
    {
        $dentist = Dentist::find($id);

        if (!$dentist) {
            return response()->json(['success' => false, 'message' => 'Dentist not found.']);
        }

        $dentist->update(['active' => 2]);

        return response()->json(['success' => true, 'message' => 'Dentist cancellation successful.']);
    }
}
