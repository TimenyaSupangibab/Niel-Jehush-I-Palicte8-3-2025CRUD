<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComponentType;

class ComponentTypeSeeder extends Seeder
{
    public function run()
    {
        ComponentType::factory(20)->create();
    }
}