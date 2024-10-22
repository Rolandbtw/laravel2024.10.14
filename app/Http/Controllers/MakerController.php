<?php

namespace App\Http\Controllers;

use App\Models\Maker;
use Illuminate\Http\Request;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sort_by = request()->query("sort_by","name");
        $sort_dir = request()->query("sort_dir","asc");
        $makers = Maker::orderBy($sort_by,$sort_dir)->paginate(9);
        return view('makers.index',compact("makers"));
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
        $maker = Maker::find($id);
        return view('makers.edit',compact('maker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $maker = Maker::find($id);
        $maker->name = $request->name;
        $maker->save();

        return redirect()->route('makers.index')->with('success', 'Kategória sikeresen módosítva.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $maker = Maker::find($id);
        $maker->delete();

        return redirect()->route('makers.index')->with('success', 'Kategória sikeresen törölve.');
    }
}
