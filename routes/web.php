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

Route::get('dashboard', function (){
   return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::post('register','Auth\RegisterController@store')->name('register');

Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');