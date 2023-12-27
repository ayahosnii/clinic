<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Dentist;
use App\Models\Specialty;
use Illuminate\Http\Request;

class VueComponentController extends Controller
{
    public function fetchSpecialties(Request $request)
    {
        try {
            $specialties = Specialty::get();
            return response()->json($specialties);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function doctors(Request $request)
    {
        $specializationId = $request->input('specializationId');

        $doctors = Dentist::where('specialty_id', $specializationId)->get();

        return response()->json($doctors);
    }
}
