<?php

use App\Http\Controllers\AddCars;
use App\Http\Controllers\CarsDelete;
use App\Http\Controllers\EditCars;
use App\Models\Cars;
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

Route::post('/delete/{id}', CarsDelete::class);
Route::get('/cars/add', AddCars::class);
Route::get('/cars/modify/{id}', EditCars::class);
