<?php

namespace App\Http\Controllers;

use App\Models\Dentist;
use App\Models\Specialty;
use DB;
use Hash;
use Illuminate\Http\Request;
use Log;

class RegisterController extends Controller
{
    public function index()
    {
        $specialties = Specialty::get();
        return view('front.register', compact('specialties'));
    }


    public function store(Request $request)
    {
        try {
            $rules = [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:dentists',
                'phone_number' => 'required|string|max:15|unique:dentists',
                'password' => 'required|string|min:8|confirmed',
            ];

            $request->validate($rules);

            // Use a transaction to ensure data integrity
            DB::beginTransaction();

            Dentist::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'password' => Hash::make($request->input('password')),
                'specialty_id' => $request->input('specialty_id'),
            ]);

            // Commit the transaction if everything is successful
            DB::commit();

            session()->flash('success', 'Dentist registered successfully!');
            return redirect()->route('home');
        } catch (\Exception $e) {
            return $e;
            // An error occurred, rollback the transaction and handle the exception
            DB::rollback();

            // You can log the exception for debugging purposes
            Log::error($e);

            // Redirect back with an error message
            return redirect()->back()->with('error', 'An error occurred while registering the dentist.');
        }
    }

}
