<?php

namespace App\Http\Controllers;

use App\Models\ComponentChipset;
use Illuminate\Http\Request;

class ComponentChipsetTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chipset = ComponentChipset::all();
        return view("view.view_chipsets", compact("chipset"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("add.add_chipsets");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "component_chipset_name" => "required|string",
        ]);

        ComponentChipset::create($request->only("component_chipset_name"));

        return redirect()->route("view_chipsets")->with("success", "Component chipset created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $chipset = ComponentChipset::findOrFail($id);
        return view("view.view_chipsets", compact("chipset"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $chipset = ComponentChipset::findOrFail($id);
        return view("edit.edit_chipsets", compact("chipset"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $chipset = ComponentChipset::findOrFail($id);

        $request->validate([
            "component_chipset_name" => "required|string",
        ]);

        $chipset->update($request->only("component_chipset_name"));

        return redirect()->route("view_chipsets")->with("success", "Component chipset updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $chipset = ComponentChipset::findOrFail($id);
        $chipset->delete();

        return redirect()->route("view_chipsets")->with("success", "Component chipset deleted successfully.");
    }
}
