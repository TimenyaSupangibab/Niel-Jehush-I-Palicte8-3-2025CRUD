<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ComponentBrandSeeder::class,
        ]);

        $this->call([
            ComponentChipsetSeeder::class,
        ]);

        $this->call([
            ComponentFormFactorSeeder::class,
        ]);

        $this->call([
            ComponentRamTypeSeeder::class,
        ]);

        $this->call([
            ComponentSocketSeeder::class,
        ]);

        $this->call([
            ComponentTypeSeeder::class,
        ]);
    }
}
