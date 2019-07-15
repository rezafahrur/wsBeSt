<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes ==>> /4P1/ from RouteServiceProvider
|--------------------------------------------------------------------------
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('/8357_C0S12V_ARJ', 'NasabahController@get');
Route::post('/8357_C012V_ARJ/{prefix}', 'NasabahController@store');
