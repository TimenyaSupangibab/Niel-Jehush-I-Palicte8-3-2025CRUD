<?php

namespace App\Http\Controllers;

use App\Models\UserBuild;
use Illuminate\Http\Request;

class UserBuildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $builds = UserBuild::all();
        return view("view.view_builds", compact("builds"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add.add_build");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "user_id" => "required|integer",
            "build_name" => "required|string",
        ]);

        UserBuild::create($request->only("user_id", "build_name"));

        return redirect()->route("view_builds")->with("success", "User build created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $build = UserBuild::findOrFail($id);
        return view("view.view_builds", compact("build"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $build = UserBuild::findOrFail($id);
        return view("edit.edit_build", compact("build"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $build = UserBuild::findOrFail($id);
        $build->update($request->only("user_id", "build_name"));

        return redirect()->route("view_builds")->with("success", "User build updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        UserBuild::destroy($id);
        return redirect()->route("view_builds")->with("success", "User build deleted successfully.");
    }
}
