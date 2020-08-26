<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/driver', 'DriverController@createDriver');
Route::get('/driver', 'DriverController@getAllDrivers');
Route::get('/driver/{id}', 'DriverController@getDriverById');
Route::get('/driver/{field}/{value}', 'DriverController@findByField');
Route::post('/vehicle', 'VehicleController@createVehicle');
Route::get('/vehicle', 'VehicleController@getAllVehicles');
Route::get('/vehicle/{id}', 'VehicleController@getVehicleById');
Route::get('/vehicle/{field}/{value}', 'VehicleController@findByField');
//Route::post('/notification/mt/dn/{partnerRole}','MTNotificationController@createMTNotification');
//Route::post('/notification/user-optin/{partnerRole}','OptInNotificationController@createOptInNotification');
//Route::post('/notification/user-optout/{partnerRole}','OptOutNotificationController@createOptOutNotification');
//Route::post('/notification/user-renewed/{partnerRole}','RenewalNotificationController@createRenewalNotification');

