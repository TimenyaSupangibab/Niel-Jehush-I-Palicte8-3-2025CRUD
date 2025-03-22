<?php

namespace App\Http\Controllers;

use App\Models\ComponentBrand;
use App\Models\ComponentSocket;
use Illuminate\Http\Request;

class ComponentBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = ComponentBrand::all();
        return view("view.view_brands", compact("brands"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add.add_brand");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "component_brand_name" => "required|string",
        ]);

        ComponentBrand::create($request->only("component_brand_name"));

        return redirect()->route("view_brands")->with("success", "Component brand created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = ComponentBrand::findOrFail($id);
        return view("view.view_brands", compact("brand"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = ComponentBrand::findOrFail($id);
        return view("edit.edit_brands", compact("brand"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "component_brand_name" => "required|string",
        ]);

        $brand = ComponentBrand::findOrFail($id);
        $brand->update($request->all());

        return redirect()->route("view_brands")->with("success", "Component brand updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = ComponentBrand::findOrFail($id);
        $brand->delete();

        return redirect()->route("view_brands")->with("success", "Component brand deleted successfully.");
    }
}
