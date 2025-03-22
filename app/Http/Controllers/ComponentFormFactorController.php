<?php

namespace App\Http\Controllers;

use App\Models\ComponentFormFactor;
use Illuminate\Http\Request;

class ComponentFormFactorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form_factors = ComponentFormFactor::all();
        return view("view.view_form_factors", compact("form_factors"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add.add_form_factors");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "component_form_factor_name" => "required|string",
        ]);

        ComponentFormFactor::create($request->only("component_form_factor_name"));

        return redirect()->route("view_form_factors")->with("success", "Component form factor created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $form_factor = ComponentFormFactor::findOrFail($id);
        return view("view.view_form_factors", compact("form_factor"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $form_factor = ComponentFormFactor::findOrFail($id);
        return view("edit.edit_form_factors", compact("form_factor"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $form_factor = ComponentFormFactor::findOrFail($id);
        $form_factor->update($request->only("component_form_factor_name"));

        return redirect()->route("view_form_factors")->with("success", "Component form factor updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ComponentFormFactor::findOrFail($id)->delete();
        return redirect()->route("view_form_factors")->with("success", "Component form factor deleted successfully.");
    }
}
