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
        Schema::create("bcags_users", function(Blueprint $table)
        {
            $table->id("user_id");
            $table->string("user_first_name");
            $table->string("user_last_name");
            $table->string("user_description");
            $table->integer("user_prelim")->default(0);
            $table->integer("user_midterm")->default(0);
            $table->integer("user_prefinal")->default(0);
            $table->integer("user_final")->default(0);
            $table->float("average")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
