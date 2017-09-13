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
    return redirect('/employees');
});

Route::get('/earnings', function () {
    return view('user-panel.earnings');
});


Route::get( '/employees-account/{employee_id}/edit',   'EmployeeController@accountEdit');
Route::put('/employees-account/{employee_id}',        'EmployeeController@accountUpdate');
Route::get('/employees-account/getChangePasswordCode/{employee_id}', 'EmployeeController@getChangePasswordCode');


Route::resource('/employees', 'EmployeeController');
Route::get('/employees/search', 'EmployeeController@search');
//Route::get('/employees/{page}/{search}/{pageKey?}', 'EmployeeController@search');
