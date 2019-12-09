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
    return redirect('/airQualityApp/choosePlaces');
});

Route::get('/dataResearchParams/{id}', function () {
    return redirect('/airQualityApp/choosePlaces');
});

Route::get('/dataAirQuality/{id}', function () {
    return redirect('/airQualityApp/choosePlaces');
});

Route::prefix('airQualityApp')->group(function() {
    Route::match(['get', 'post'], '/choosePlaces', 'SearchPlacesController@choosePlaces')->name('airQualityApp.choosePlaces');
    Route::match(['get', 'post'], '/getResults', 'SearchPlacesController@getResults')->name('airQualityApp.getResults');
    Route::match(['get', 'post'], '/dataResearchParams/{id}', 'SearchPlacesController@dataResearchParams')->where('id', '[0-9]+')->name('airQualityApp.dataResearchParams');
    Route::match(['get', 'post'], '/dataAirQuality/{id}', 'SearchPlacesController@dataAirQuality')->where('id', '[0-9]+')->name('airQualityApp.dataAirQuality');
});