<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('users','UserController');
Route::resource('customers','CustomerController')->middleware('auth');
Route::resource('employees','EmployeeController')->middleware('auth');
Route::resource('services','ServiceController')->middleware('auth');
Route::resource('working-hours','WorkingHourController')->middleware('auth');
Route::resource('appointments','AppointmentController')->middleware('auth');

Route::get('dashboard', function (){
    if(\Illuminate\Support\Facades\Auth::user()->role_id!=1)
        $appointments = \App\Entities\Appointment::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->get();
    else {
        $appointments = \App\Entities\Appointment::all();
    }
   return view('dashboard', compact('appointments'));
})->name('dashboard')->middleware('auth');

Route::post('register','Auth\RegisterController@store')->name('register');

Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');


Route::get('/calendar', function () {
    $appointments = \App\Entities\Appointment::all();
    return view('calendar',compact('appointments'));
});