<?php

namespace Database\Factories;

use App\Models\ComponentFormFactor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComponentFormFactorFactory extends Factory
{
    protected $model = ComponentFormFactor::class;

    public function definition()
    {

        $formFactors = [
            'ATX', 'Micro ATX', 'Mini ITX', 'E-ATX', 'XL-ATX',
            'BTX', 'ITX', 'Half-ATX', 'LPX', 'Nano-ITX'
        ];

        return [
            'component_form_factor_name' => $this->faker->randomElement($formFactors),
        ];
    }
}
