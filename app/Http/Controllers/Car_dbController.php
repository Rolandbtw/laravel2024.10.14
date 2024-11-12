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
        return view('cardb.index',['bodies' => Body::all(),'colors' => Color::all(),'fuels' => Fuel::all(),'shifters' => Shifter::all(),'makers'=>Maker::all(), 'models'=>Car::all(), 'cars'=> Car_db::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $car = new Car_db;
        $car->maker_id = $request->makers;
        $car->modell_id = $request->carmodels;
        $car->üzemanyag_id = $request->fuels;
        $car->shifter_id = $request->shifters;
        $car->body_id = $request->bodies;
        $car->color_id = $request->colors;
        $car->save();

        return view('cardb.index',['bodies' => Body::all(),'colors' => Color::all(),'fuels' => Fuel::all(),'shifters' => Shifter::all(),'makers'=>Maker::all(), 'models'=>Car::all()]);
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
