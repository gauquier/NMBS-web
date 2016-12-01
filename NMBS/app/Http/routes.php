<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/stationInfo', 'stationInfo@getAllStations');

Route::get('/routeInfo', 'RouteInfo@getAllStations');

Route::get('/treinInfo', function () {
    return view('trein.treinInfo');
});

Route::get('/trein', 'treinInfo@getTrein');

Route::get('/station', 'stationInfo@getStation');

Route::get('/routeInfoGegevens', 'RouteInfo@getRoute');