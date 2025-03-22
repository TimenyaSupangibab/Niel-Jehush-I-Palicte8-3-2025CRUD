<?php

namespace Database\Factories;

use App\Models\ComponentBrand;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComponentBrandFactory extends Factory
{
    protected $model = ComponentBrand::class;

    public function definition()
    {

        $pcBrands = [
            'Intel', 'AMD', 'NVIDIA', 'Corsair', 'Asus',
            'MSI', 'Gigabyte', 'EVGA', 'Razer', 'Kingston',
            'Cooler Master', 'Thermaltake', 'Noctua', 'NZXT', 'ASRock'
        ];


        return [
            'component_brand_name' => $this->faker->randomElement($pcBrands),
        ];
    }
}
