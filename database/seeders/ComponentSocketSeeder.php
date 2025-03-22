<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComponentSocket;

class ComponentSocketSeeder extends Seeder
{
    public function run()
    {
        ComponentSocket::factory(20)->create();
    }
}