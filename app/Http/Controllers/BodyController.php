<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bodies.index',['bodies' => Body::all()]);
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
        $body = Body::find($id);
        return view('bodies.edit',compact('body'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name"=>"required|min:3"
        ],["required"=>"Kötelező!","min"=>"Legalább 3"]);

        $body = Body::find($id);
        $body->name = $request->name;
        $body->save();

        return redirect()->route('bodies.index')->with('success', 'Sikeresen módosítva.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $body = Body::find($id);
        $body->delete();

        return redirect()->route('bodies.index')->with('success', 'Sikeresen törölve.');
    }
}
