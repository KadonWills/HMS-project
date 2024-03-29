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
    return view('index', 'RoleController@index');
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
Route::get('/roles', function () {
    return ;
});

Route::get('/aboutus', function () {
    return view('template');
});

Route::resources([
    'role' => 'RoleController',
    'exampresc' => 'ExamprescController',
    'User' => 'UserController'
]);

#Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/admin/users', function () {
    return view('admin/users');
});

Route::get('/admin/priviledges', function () {
    return view('admin/priviledges');
});
