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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/users', function () {
	if (rand(1, 10) < 3) {
		abort(500, 'We could not retrieve the users');
	}

	// return App\Models\User::factory(10)->make();

});

Route::namespace('Api')->group(function () {
    Route::get('/users', '\App\Http\Controllers\Api\UsersController@index');
});