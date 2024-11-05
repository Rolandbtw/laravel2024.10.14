<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Body;
use App\Models\Fuel;
use App\Models\Color;
use App\Models\Maker;
use App\Models\Car_db;
use App\Models\Shifter;
use Illuminate\Http\Request;

class Car_dbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function index()
    {
        return view('cardb.index',['bodies' => Body::all(),'colors' => Color::all(),'fuels' => Fuel::all(),'shifters' => Shifter::all(),'makers'=>Maker::all(), 'carmodels'=>Car::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $car = new Car_db;
        $car->maker = $request->makers;
        $car->modell = $request->carmodels;
        $car->üzemanyag = $request->fuels;
        $car->shifter = $request->shifters;
        $car->body = $request->bodies;
        $car->color = $request->colors;
        $car->save();

        return view('cardb.index',['bodies' => Body::all(),'colors' => Color::all(),'fuels' => Fuel::all(),'shifters' => Shifter::all(),'makers'=>Maker::all(), 'carmodels'=>Car::all()]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
