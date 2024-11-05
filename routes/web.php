<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\Car_dbController;


Route::get('/', function () {
    return view('layouts.app');
})->name("home");
Route::resource('makers',MakerController::class);

Route::get('fuels',[FuelController::class, 'index'] )->name('fuels');

Route::resource('cardb',Car_dbController::class);