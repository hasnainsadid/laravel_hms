<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['appointment'] = Appointment::all();
        return view('backend.appointment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->back();
    }

    // pending appointment //
    public function pending()
    {
        $data['appointment'] = Appointment::where('status', '0')->get();
        return view('backend.appointment.pending', $data);
    }

    // Approved Appointment //
    public function approved()
    {
        $data['appointment'] = Appointment::where('status', '1')->get();
        return view('backend.appointment.approved', $data);
    }

    public function confirmed($id)
    {
        $data = Appointment::find($id);
        $data->status = 1;
        $data->update();
        return redirect()->back();
    }
}
