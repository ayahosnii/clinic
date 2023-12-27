<?php

namespace App\Http\Controllers;

use App\Models\WorkHour;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $doctorId = $request->input('doctorId');

        $availableTimes = [
            '09:00', '09:30', '10:00', '10:30', '11:00',
            '11:30', '12:00', '12:30', '13:00', '13:30'
        ];

        $timeSlots = WorkHour::where('dentist_id', $doctorId)->first();

        // Extract hours and minutes from the start_time field
        list($startHours, $startMinutes) = explode(':', $timeSlots->start_time);

        // Extract hours and minutes from the end_time field
        list($endHours, $endMinutes) = explode(':', $timeSlots->end_time);

        return response()->json([
            'time_slots' => [
                'availableTimes' => $availableTimes,
                'data' => $timeSlots,
                'start_time' => [
                    'hours' => $startHours,
                    'minutes' => $startMinutes,
                ],
                'end_time' => [
                    'hours' => $endHours,
                    'minutes' => $endMinutes,
                ],
            ],
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
