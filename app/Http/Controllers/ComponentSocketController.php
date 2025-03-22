<?php

namespace App\Http\Controllers;

use App\Models\ComponentSocket;
use Illuminate\Http\Request;

class ComponentSocketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socket_types = ComponentSocket::all();
        return view("view.view_socket_type", compact("socket_types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add.add_socket_type");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "component_socket_name" => "required|string",
        ]);

        ComponentSocket::create($request->only("component_socket_name"));

        return redirect()->route("view_socket_types")->with("success", "Component socket created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $socket_type = ComponentSocket::findOrFail($id);
        return view("view.view_socket_types", compact("socket_type"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $socket_type = ComponentSocket::findOrFail($id);
        return view("edit.edit_socket_type", compact("socket_type"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "component_socket_name" => "required|string",
        ]);

        $socket_type = ComponentSocket::findOrFail($id);
        $socket_type->update($request->only("component_socket_name"));

        return redirect()->route("view_socket_types")->with("success", "Component socket updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ComponentSocket::destroy($id);
        return redirect()->route("view_socket_types")->with("success", "Component socket deleted successfully.");
    }
}
