<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'location',
], function () {
    Route::post('/', 'ApiLocationController@store')->name('store');
});