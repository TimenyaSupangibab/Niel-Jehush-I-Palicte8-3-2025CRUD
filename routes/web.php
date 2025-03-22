<?php

use App\Http\Controllers\
{
    ProfileController,
    UserController,
    UserBuildController,
    UserBuildComponentController,
    PcComponentController,
    ComponentBrandController,
    ComponentTypeController,
    ComponentSocketController,
    ComponentChipsetTypeController,
    ComponentFormFactorController,
    ComponentRamTypeController
};
use App\Models\ComponentChipset;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(["auth", "verified", "throttle:60,1"])->group(function ()
{
    Route::view("/dashboard", "dashboard")->name("dashboard");
    Route::view("/start_building", "start_building")->name("start_building");
    Route::view("/view_my_builds", "view_my_builds")->name("view_my_builds");
    Route::view("/view_user_builds", "view_user_builds")->name("view_user_builds");

    Route::resources(
        [
            "user-builds"            => UserBuildController::class,
            "user-build-components"  => UserBuildComponentController::class,
            "pc-components"          => PcComponentController::class,
            "component-brands"       => ComponentBrandController::class,
            "component-types"        => ComponentTypeController::class,
            "component-socket-types" => ComponentSocketController::class,
            "component-chipset-types"=> ComponentChipsetTypeController::class,
            "component-form-factors" => ComponentFormFactorController::class,
            "component-ram-types"    => ComponentRamTypeController::class,
        ]
    );

    Route::get("/view_chipsets", [ComponentChipsetTypeController::class, "index"])->name("view_chipsets");
    Route::get("/view_brands", [ComponentBrandController::class, "index"])->name("view_brands");
    Route::get("/view_form_factors", [ComponentFormFactorController::class, "index"])->name("view_form_factors");
    Route::get("/view_ram_types", [ComponentRamTypeController::class, "index"])->name("view_ram_types");
    Route::get("/view_socket_types", [ComponentSocketController::class, "index"])->name("view_socket_types");
    Route::get("/view_component_types", [ComponentTypeController::class, "index"])->name("view_component_types");
    Route::get("/view_components", [PcComponentController::class, "index"])->name("view_components");
    


    Route::get("/add_brands", [ComponentBrandController::class, "create"])->name("add_brands");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
