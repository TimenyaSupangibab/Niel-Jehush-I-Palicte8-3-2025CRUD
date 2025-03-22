<?php

namespace App\Http\Controllers;

use App\Models\ComponentRamType;
use Illuminate\Http\Request;

class ComponentRamTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ram_types = ComponentRamType::all();
        return view("view.view_ram_types", compact("ram_types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add.add_ram_types");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "component_ram_type_name" => "required|string",
        ]);

        ComponentRamType::create($request->only("component_ram_type_name"));

        return redirect()->route("view_ram_types")->with("success", "Component RAM type created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ram_type = ComponentRamType::findOrFail($id);
        return view("view.view_ram_types", compact("ram_type"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ram_type = ComponentRamType::findOrFail($id);
        return view("edit.edit_ram_types", compact("ram_type"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "component_ram_type_name" => "required|string",
        ]);

        $ram_type = ComponentRamType::findOrFail($id);
        $ram_type->update($request->only("component_ram_type_name"));

        return redirect()->route("view_ram_types")->with("success", "Component RAM type updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ComponentRamType::destroy($id);
        return redirect()->route("view_ram_types")->with("success", "Component RAM type deleted successfully.");
    }
}
