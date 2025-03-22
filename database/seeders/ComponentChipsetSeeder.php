<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComponentChipset;

class ComponentChipsetSeeder extends Seeder
{
    public function run()
    {
        ComponentChipset::factory(20)->create();
    }
}