<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\Car_dbController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ShifterController;
use App\Http\Controllers\BodyController;

Route::get('/', function () {
    return view('layouts.app');
})->name("home");

Route::resource('makers',MakerController::class);
Route::get('makers/{id}/models',[MakerController::class, 'models'])->name('makers.models');
Route::resource('fuels',FuelController::class);
Route::resource('cardb',Car_dbController::class);
Route::resource('bodies',BodyController::class);
Route::resource('colors',ColorController::class);
Route::resource('shifters',ShifterController::class);
