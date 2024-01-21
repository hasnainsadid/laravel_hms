<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $data['patient'] = Patient::count();
        $data['doctor'] = Doctor::count();
        $data['appointment_pending'] = Appointment::where('status', 0)->count();
        $data['appointment'] = Appointment::count();
        $data['department'] = Department::count();
        $data['admin'] = Admin::count();
        return view('backend.home', $data);
    }
}
