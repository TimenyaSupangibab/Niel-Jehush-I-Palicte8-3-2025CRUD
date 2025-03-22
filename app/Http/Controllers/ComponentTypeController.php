<?php

namespace App\Http\Controllers;

use App\Models\ComponentType;
use Illuminate\Http\Request;

class ComponentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $component_types = ComponentType::all();
        return view("view.view_component_type", compact("component_types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add.add_component_type");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "component_type_name" => "required|string",
        ]);

        ComponentType::create($request->only("component_type_name"));

        return redirect()->route("view_component_types")->with("success", "Component type created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $component_type = ComponentType::findOrFail($id);
        return view("view.view_component_types", compact("component_type"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $component_type = ComponentType::findOrFail($id);
        return view("edit.edit_component_type", compact("component_type"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "component_type_name" => "required|string",
        ]);

        $component_type = ComponentType::findOrFail($id);
        $component_type->update($request->only("component_type_name"));

        return redirect()->route("view_component_types")->with("success", "Component type updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ComponentType::findOrFail($id)->delete();
        return redirect()->route("view_component_types")->with("success", "Component type deleted successfully.");
    }
}
