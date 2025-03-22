<?php

namespace Database\Factories;

use App\Models\ComponentChipset;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComponentChipsetFactory extends Factory
{
    protected $model = ComponentChipset::class;

    public function definition()
    {

        $chipsets = [
            'Intel Z590', 'AMD B550', 'Intel Z490', 'AMD X570', 'Intel B460',
            'Intel Z370', 'AMD B450', 'Intel H510', 'AMD A320', 'Intel H370',
            'Intel B365', 'Intel Z590', 'Intel H470', 'AMD A520', 'AMD X470'
        ];

        return [
            'component_chipset_name' => $this->faker->randomElement($chipsets),
        ];
    }
}