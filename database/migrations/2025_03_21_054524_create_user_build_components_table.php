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
        Schema::create('user_build_components', function (Blueprint $table) {
            $table->id('user_build_components_id');
            $table->unsignedBigInteger('user_build_id');
            $table->unsignedBigInteger('pc_component_id');
            $table->timestamps();

            $table->foreign('user_build_id')->references('user_build_id')->on('user_builds')->onDelete('cascade');
            $table->foreign('pc_component_id')->references('pc_component_id')->on('pc_components')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_build_components');
    }
};
