<?php

namespace Database\Factories;

use App\Models\ComponentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComponentTypeFactory extends Factory
{
    protected $model = ComponentType::class;

    public function definition()
    {
        $componentTypes = [
            'CPU', 'GPU', 'RAM', 'Motherboard', 'Storage', 'Power Supply', 'Cooling', 'Case'
        ];

        return [
            'component_type_name' => $this->faker->randomElement($componentTypes),
        ];
    }
}
