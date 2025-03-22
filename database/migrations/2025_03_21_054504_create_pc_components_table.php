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
        Schema::create('pc_components', function (Blueprint $table) {
            $table->id('pc_component_id');
            $table->string('pc_component_name');
            $table->unsignedBigInteger('component_type_id');
            $table->unsignedBigInteger('component_brand_id')->nullable();
            $table->unsignedBigInteger('component_socket_id')->nullable();
            $table->unsignedBigInteger('component_chipset_id')->nullable();
            $table->unsignedBigInteger('component_form_factor_id')->nullable();
            $table->unsignedBigInteger('component_ram_type_id')->nullable();
            $table->decimal('pc_component_price', 10, 2);
            $table->boolean('pc_component_is_deleted')->default(0);
            $table->timestamps();

            $table->foreign('component_type_id')->references('component_type_id')->on('component_types')->onDelete('cascade');
            $table->foreign('component_brand_id')->references('component_brand_id')->on('component_brands')->onDelete('set null');
            $table->foreign('component_socket_id')->references('component_socket_id')->on('component_sockets')->onDelete('set null');
            $table->foreign('component_chipset_id')->references('component_chipset_id')->on('component_chipsets')->onDelete('set null');
            $table->foreign('component_form_factor_id')->references('component_form_factor_id')->on('component_form_factors')->onDelete('set null');
            $table->foreign('component_ram_type_id')->references('component_ram_type_id')->on('component_ram_types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pc_components');
    }
};
