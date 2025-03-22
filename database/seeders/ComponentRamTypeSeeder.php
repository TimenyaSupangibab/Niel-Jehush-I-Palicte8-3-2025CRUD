<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComponentRamType;

class ComponentRamTypeSeeder extends Seeder
{
    public function run()
    {
        ComponentRamType::factory(20)->create();
    }
}