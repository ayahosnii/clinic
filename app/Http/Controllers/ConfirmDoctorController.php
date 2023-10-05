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

    public function acceptUser(Request $request, $id)
    {
        $dentist = Dentist::find($id);

        if (!$dentist) {
            return response()->json(['success' => false, 'message' => 'Dentist not found.']);
        }

        $dentist->update(['active' => 1]);

        return response()->json(['success' => true, 'message' => 'Dentist cancellation successful.']);
    }
}


