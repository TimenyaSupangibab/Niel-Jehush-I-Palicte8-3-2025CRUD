<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComponentFormFactor;

class ComponentFormFactorSeeder extends Seeder
{
    public function run()
    {
        ComponentFormFactor::factory(20)->create();
    }
}