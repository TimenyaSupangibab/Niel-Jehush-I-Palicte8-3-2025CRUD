<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComponentBrand;

class ComponentBrandSeeder extends Seeder
{
    public function run()
    {
        ComponentBrand::factory(20)->create();
    }
}