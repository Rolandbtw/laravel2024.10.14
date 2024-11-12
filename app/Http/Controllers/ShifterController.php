<?php

namespace App\Http\Controllers;

use App\Models\Shifter;
use Illuminate\Http\Request;

class ShifterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shifters.index',['shifters' => Shifter::all()]);
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
        $shifter = Shifter::find($id);
        return view('shifters.edit',compact('shifter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name"=>"required|min:3"
        ], ["required"=>"Kötelező!","min"=>"Legalább 3"]);
        $shifter = Shifter::find($id);
        $shifter->name = $request->name;
        $shifter->save();

        return redirect()->route('shifters.index')->with('success', 'Sikeresen módosítva.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shifter =Shifter::find($id);
        $shifter->delete();

        return redirect()->route('shifters.index')->with('success', 'Sikeresen törölve.');
    }
}
