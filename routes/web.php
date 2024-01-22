<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AdmissionController;
use App\Http\Controllers\backend\AppointmentController;
use App\Http\Controllers\backend\Dashboard;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\DoctorController;
use App\Http\Controllers\backend\MedicineController;
use App\Http\Controllers\backend\PatientController;
use App\Http\Controllers\backend\SeatController;
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

// admin //
Route::resource('admin_info', AdminController::class);

// appointment //
Route::resource('appointment', AppointmentController::class);
Route::get('pending_appointment', [AppointmentController::class, 'pending'])->name('appointment.pending');
Route::get('approved_appointment', [AppointmentController::class, 'approved'])->name('appointment.approved');
Route::post('confirmed_appointment/{id}', [AppointmentController::class, 'confirmed'])->name('appointment.confirm');

// doctor //
Route::resource('doctor', DoctorController::class);

// department //
Route::resource('department', DepartmentController::class);

// patient //
Route::resource('patient', PatientController::class);

// tretment //
Route::resource('treatment', TreatmentController::class);

// Mediciine //
Route::resource('medicine', MedicineController::class);

// Seats //
Route::resource('seat', SeatController::class);

// Admission //
Route::resource('admission', AdmissionController::class);
Route::post('admission/release/{id}', [AdmissionController::class, 'release'])->name('admission.release');