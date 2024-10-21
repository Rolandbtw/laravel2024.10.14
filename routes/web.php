<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\CarModelController;

Route::get('/', function () {
    return view('layouts.app');
})->name("home");
Route::get('makers',[MakerController::class, 'index'] )->name('makers');
Route::get('fuels',[FuelController::class, 'index'] )->name('fuels');
Route::get('cars_model',[CarModelController::class, 'index'] )->name('carModels');