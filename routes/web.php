<?php

use App\Http\Controllers\ShowCars;
use Illuminate\Support\Facades\Route;

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

Route::get('/', ShowCars::class)->name('carsTable');
Route::get('/add-car', function ()
{
    return view('cars-spec-form');
});
Route::get('/edit-car/{id}', function ($id) {
    return view('edit-car-form', ['id' => $id]);
});

Route::get('/car', function () {
    return view('view-car-spec');
})->name('carsview');
