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
    return view('index');
});


/*---------Patient Resource Route Begin---------------*/
Route::resource('patients','PatientController');




/*---------Patient Resource Route End---------------*/

/*---------User Resource Route Begin---------------*/
Route::resource('users','UserController');
/*---------User Resource Route End---------------*/

/*---------User Resource Route Begin---------------*/
Route::resource('consultation','ConsultationController');

/*---------User Resource Route End---------------*/