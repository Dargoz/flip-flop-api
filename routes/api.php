<?php

use App\Http\Controllers\Api\PlayerApiController;
use App\Http\Controllers\Api\AuthApiController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('login', 'AuthApiController@login');
// Route::group(['prefix' => 'auth', 'middleware' => 'auth:sanctum'], function() {
//     // manggil controller sesuai bawaan laravel 8
//     Route::post('logout', [AuthApiController::class, 'logout']);
//     // manggil controller dengan mengubah namespace di RouteServiceProvider.php biar bisa kayak versi2 sebelumnya
//     Route::post('logoutall', 'AuthApiController@logoutall');
// });


Route::apiResource('player', PlayerApiController::class);
Route::post('login', [AuthApiController::class, 'login']);