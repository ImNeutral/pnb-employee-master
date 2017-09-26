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
    return redirect('/employee');
});

Route::get('/earning', function () {
    return view('user-panel.earnings');
});


Route::get( '/employee-account/{employee_id}/edit',                 'EmployeeController@accountEdit');
Route::put('/employee-account/{employee_id}',                       'EmployeeController@accountUpdate');
Route::get('/employee-account/getChangePasswordCode/{employee_id}', 'EmployeeController@getChangePasswordCode');
Route::resource('/employee',                                        'EmployeeController');
Route::resource('/employee/schedule',                               'ScheduleController');
Route::get('/employee/search',                                      'EmployeeController@search');
Route::get('/sales-print',                                          'OrderController@salesPrint');

Route::group(['prefix' => 'sales'], function () {
    Route::get('/', function ()    { return view('sales.sales'); });
    Route::get('/getAllYearsData',      'OrderController@getAllYearsData');
    Route::get('/getAllMonthsData',     'OrderController@getAllMonthsData');
    Route::get('/getAllDaysData',       'OrderController@getAllDaysData');
});

Route::group(['prefix' => 'top-products'], function () {
    Route::get('/',                     'OrderController@topProducts');
    Route::get('/topProductsForYear',   'OrderController@topProductsForYear');
    Route::get('/topProductsForMonth',  'OrderController@topProductsForMonth');
    Route::get('/topProductsForDay',    'OrderController@topProductsForDay');
    Route::get('/ordersForDay',         'OrderController@ordersForDay');
});



