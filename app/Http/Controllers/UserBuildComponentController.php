<?php

namespace App\Http\Controllers;

use App\Models\UserBuildComponent;
use Illuminate\Http\Request;

class UserBuildComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_build_components = UserBuildComponent::all();
        return view("view.view_user_build_components", compact("user_build_components"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add.add_user_build_component");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "user_build_id" => "required|integer",
            "component_id" => "required|integer",
            "component_quantity" => "required|integer",
        ]);

        UserBuildComponent::create($request->only("user_build_id", "component_id", "component_quantity"));

        return redirect()->route("view_user_build_components")->with("success", "User build component created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user_build_component = UserBuildComponent::findOrFail($id);
        return view("view.view_user_build_components", compact("user_build_component"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user_build_component = UserBuildComponent::findOrFail($id);
        return view("edit.edit_user_build_component", compact("user_build_component"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user_build_component = UserBuildComponent::findOrFail($id);

        $request->validate([
            "user_build_id" => "required|integer",
            "component_id" => "required|integer",
            "component_quantity" => "required|integer",
        ]);

        $user_build_component->update($request->only("user_build_id", "component_id", "component_quantity"));

        return redirect()->route("view_user_build_components")->with("success", "User build component updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user_build_component = UserBuildComponent::findOrFail($id);
        $user_build_component->delete();

        return redirect()->route("view_user_build_components")->with("success", "User build component deleted successfully.");
    }
}
