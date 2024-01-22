<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Patient;
use App\Models\Seat;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['admission'] = Admission::all();
        return view('backend.admission.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $seat = Seat::all();
        return view('backend.admission.create', compact('seat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Patient $patient)
    {
        // $admission = new Admission();
        
        // $data = [
        //     'p_id' => $patient->id,
        //     'seat_id' => $request->seat_id
        // ];
        // dd($data);
        // $admission->create($data);

        // return redirect()->route('admission.index')->with('msg', 'Admitted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admission $admission)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission $admission)
    {
        //
    }

    public function release($id)
    {
        $data = Admission::find($id);
        $data->release_date = now();
        $data->update();
        return redirect()->back();
    }
}