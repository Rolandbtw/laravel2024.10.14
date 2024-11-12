<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fuels = Fuel::all();
        return view('fuels.index',compact("fuels"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $fuel = Fuel::find($id);
        return view('fuels.edit',compact('fuel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name"=>"required|min:3"
        ],["required"=>"Kötelező!","min"=>"Legalább 3"]);

        $fuel = Fuel::find($id);
        $fuel->name = $request->name;
        $fuel->save();

        return redirect()->route('fuels.index')->with('success', 'Sikeresen módosítva.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fuel = Fuel::find($id);
        $fuel->delete();

        return redirect()->route('fuels.index')->with('success', 'Sikeresen törölve.');
    }
}
