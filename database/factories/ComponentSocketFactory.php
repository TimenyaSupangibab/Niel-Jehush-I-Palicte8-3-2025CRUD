<?php

namespace Database\Factories;

use App\Models\ComponentSocket;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComponentSocketFactory extends Factory
{
    protected $model = ComponentSocket::class;

    public function definition()
    {
        // List of actual CPU socket types (for example)
        $socketTypes = [
            'LGA 1200', 'LGA 1151', 'AM4', 'LGA 1700', 'LGA 2066', 'TR4', 'Socket BGA 1528'
        ];

        // Return a random socket type from the list
        return [
            'component_socket_name' => $this->faker->randomElement($socketTypes),
        ];
    }
}