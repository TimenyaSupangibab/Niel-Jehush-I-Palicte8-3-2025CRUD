<?php

namespace App\Http\Controllers;

use App\Models\{
    PcComponent,
    ComponentType,
    ComponentBrand,
    ComponentChipset,
    ComponentFormFactor,
    ComponentSocket,
    ComponentRamType
};
use Illuminate\Http\Request;

class PcComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $components = PcComponent::with([
            'component_type',
            'component_brand',
            'component_socket',
            'component_chipset',
            'component_form_factor',
            'component_ram_type',
        ])->get();

        $component_types = ComponentType::all();
        $component_brands = ComponentBrand::all();
        $component_sockets = ComponentSocket::all();
        $component_chipsets = ComponentChipset::all();
        $component_form_factors = ComponentFormFactor::all();
        $component_ram_types = ComponentRamType::all();

        return view("view.view_components", compact(
            "components", 
            "component_types", 
            "component_brands", 
            "component_sockets", 
            "component_chipsets", 
            "component_form_factors", 
            "component_ram_types"
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $component_types = ComponentType::all();
        $component_brands = ComponentBrand::all();
        $component_sockets = ComponentSocket::all();
        $component_chipsets = ComponentChipset::all();
        $component_form_factors = ComponentFormFactor::all();
        $component_ram_types = ComponentRamType::all();

        return view("add.add_components", compact(
            "component_types", 
            "component_brands", 
            "component_sockets", 
            "component_chipsets", 
            "component_form_factors", 
            "component_ram_types"
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "pc_component_name" => "required|string",
            "component_type_id" => "required|exists:component_types,component_type_id", 
            "component_brand_id" => "required|exists:component_brands,component_brand_id", 
            "component_socket_id" => "exists:component_sockets,component_socket_id", 
            "component_chipset_id" => "exists:component_chipsets,component_chipset_id", 
            "component_form_factor_id" => "exists:component_form_factors,component_form_factor_id", 
            "component_ram_type_id" => "exists:component_ram_types,component_ram_type_id", 
            "pc_component_price" => "required|numeric|min:0",
        ]);

        PcComponent::create($request->only([
            "pc_component_name",
            "component_type_id",
            "component_brand_id",
            "component_socket_id",
            "component_form_factor_id",
            "component_chipset_id",
            "component_ram_type_id",
            "pc_component_price",
        ]));

        return redirect()->route("view_components")->with("success", "Component created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $component = PcComponent::with([
            'component_type',
            'component_brand',
            'component_socket',
            'component_chipset',
            'component_form_factor',
            'component_ram_type',
        ])->findOrFail($id);

        return view("view.view_components", compact("component"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pc_component = PcComponent::findOrFail($id);
        $pc_component_types = ComponentType::all();
        $pc_component_brands = ComponentBrand::all();
        $pc_component_sockets = ComponentSocket::all();
        $pc_component_chipsets = ComponentChipset::all();
        $pc_component_form_factors = ComponentFormFactor::all();
        $pc_component_ram_types = ComponentRamType::all();
    
        return view("edit.edit_component", compact(
            "pc_component", 
            "pc_component_types", 
            "pc_component_brands", 
            "pc_component_sockets", 
            "pc_component_chipsets", 
            "pc_component_form_factors", 
            "pc_component_ram_types"
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            "pc_component_name" => "required|string",
            "component_type_id" => "exists:component_types,component_type_id",
            "component_brand_id" => "exists:component_brands,component_brand_id",
            "component_chipset_id" => "exists:component_chipsets,component_chipset_id",
            "component_form_factor_id" => "exists:component_form_factors,component_form_factor_id",
            "component_socket_id" => "exists:component_sockets,component_socket_id",
            "component_ram_type_id" => "exists:component_ram_types,component_ram_type_id",
        ]);

        $component = PcComponent::findOrFail($id);
        $component->update($request->only([
            "pc_component_name",
            "component_type_id",
            "component_brand_id",
            "component_chipset_id",
            "component_form_factor_id",
            "component_socket_id",
            "component_ram_types"
        ]));

        return redirect()->route("view_components")->with("success", "Component updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $component = PcComponent::findOrFail(id: $id);
        $component->delete();

        return redirect()->route("view_components")->with("success", "Component deleted successfully.");
    }
}
