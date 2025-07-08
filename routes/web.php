<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['namespace' => 'App\Http\Controllers\web'], function () {
    #SHIPPING ORDERS
    Route::group(
        [
            'prefix' => '/routes',
            'as' => 'routes.',
        ],
        function () {
            Route::get('/', 'WebRouteController@mostrarMapa');
            Route::get('/api/ruta/{vehicle}', 'WebRouteController@rutaJson');
            Route::get('/dangerous-zones', 'WebRouteController@geojson');
            Route::get('/optimization', 'WebRouteController@batchRoutes');
            Route::get('/vehicles/package/{id}', 'WebRouteController@batchRoutesByPackageId');
            Route::get('/types/{supplier}', 'WebRouteController@getTipos');
            Route::get('/vehicle/{supplier}/{type}', 'WebRouteController@getVehiculos');
        }
    );

    #TRUCKS
    Route::group(
        [
            'prefix' => '/vehicles',
            'as' => 'vehicles.',
        ],
        function () {
            Route::post('/assign-truck', 'WebTruckController@assignOptimalVehicle')->name('assign');
            Route::get('/report/fuel_efficiency', 'WebTruckController@fuelEfficiencyReport')->name('fuel_efficiency');
        }
    );
});
