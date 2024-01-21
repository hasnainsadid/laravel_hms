<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AppointmentController;
use App\Http\Controllers\backend\Dashboard;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\DoctorController;
use App\Http\Controllers\backend\PatientController;
use App\Http\Controllers\backend\TreatmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/admin', [Dashboard::class, 'index']);

// appointment //
Route::resource('appointment', AppointmentController::class);
Route::get('pending_appointment', [AppointmentController::class, 'pending'])->name('appointment.pending');
Route::get('approved_appointment', [AppointmentController::class, 'approved'])->name('appointment.approved');

// doctor //
Route::resource('doctor', DoctorController::class);

// department //
Route::resource('department', DepartmentController::class);

// patient //
Route::resource('patient', PatientController::class);

// tretment //
Route::resource('treatment', TreatmentController::class);

// admin //
Route::resource('admin_info', AdminController::class);