<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pc_components', function (Blueprint $table) {
            $table->integer("pc_component_psu_wattage")->nullable()->after("pc_component_price");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pc_components', function (Blueprint $table) {
            $table->dropColumn('pc_component_psu_wattage');
        });
    }
};
