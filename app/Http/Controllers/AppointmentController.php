<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.appointment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chooseDate()
    {
        return view('front.choose-date');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        try {
            // Validate the request data as needed
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|max:20',
                'password' => 'required|string|min:6',
                'selectedDoctor' => 'required|exists:dentists,id',
                'selectedTime' => 'required|date', // Adjust the validation rule based on the data type of 'selectedTime'
            ]);

            $formattedDateTime = Carbon::parse($validatedData['selectedTime'])->toDateTimeString();

            // Create a new patient
            $patient = Patient::create([
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'email' => $validatedData['email'],
                'phone_number' => $validatedData['phone'],
                'password' => bcrypt($validatedData['password']),
            ]);

            // Assuming you have a relationship between Patient and Appointment,
            // you can associate the appointment with the patient
            $appointment = new Appointment([
                'patient_id' => $patient->id,
                'dentist_id' => $validatedData['selectedDoctor'],
                'appointment_datetime' => $formattedDateTime,
                'reason' => '---',
                'status' => 'scheduled',
            ]);

            // Associate the appointment with the patient
            $patient->appointments()->save($appointment);

            return response()->json(['message' => 'Patient and appointment created successfully']);
        } catch (QueryException $e) {
            // Handle database-related exceptions
            return response()->json(['error' => 'Database error: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            // Handle other exceptions
            return response()->json(['error' => 'Error: ' . $e->getMessage()], 500);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
