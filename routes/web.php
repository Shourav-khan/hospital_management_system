<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/',[homeController::class,'index']);
Route::get('/home',[homeController::class,'userBasedView']);
Route::get('/doctors_list_add',[adminController::class,'addDoctor'])->name('add.doctor');
Route::post('/add_doctors',[adminController::class,'adding'])->name('store_doctor');
Route::post('/appoinment',[homeController::class,'appoinmentIn'])->name('doctor.appoinment');
Route::get('/show_appointment',[homeController::class,'apppointments'])->name('show.appointment');
Route::get('/cancel_appoint/{id}',[homeController::class,'cancelAppointment'])->name('delete.appoint');
Route::get('/admin_show_user_appoint', [adminController::class,'adminAppointments'])->name('admin.appointments');
Route::get('approve/{id}',[adminController::class, 'approve'])->name('approve');
Route::get('cancel/{id}',[adminController::class, 'cancel'])->name('cancel');
Route::get('/all_doctors', [adminController::class, 'allDoctors'])->name('all.doctors');
Route::get('delete/{id}', [adminController::class, 'delete'])->name('delete.doctor');
Route::get('update_doctor/{id}', [adminController::class, 'updateDoctor'])->name('update.doctor');
Route::post('update_doctor_done/{id}',[adminController::class, 'updateDone' ])->name('update.done');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
