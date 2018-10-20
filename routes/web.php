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

Route::get('dashboard', function (){
   return view('dashboard');
})->name('dashboard');

Route::post('register','Auth\RegisterController@store')->name('register');