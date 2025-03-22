<?php

namespace Database\Factories;

use App\Models\ComponentRamType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComponentRamTypeFactory extends Factory
{
    protected $model = ComponentRamType::class;

    public function definition()
    {

        $ramTypes = [
            'DDR', 'DDR2', 'DDR3', 'DDR4', 'DDR5', 'LPDDR4', 'LPDDR5'
        ];

        return [
            'component_ram_type_name' => $this->faker->randomElement($ramTypes),
        ];
    }
}
