<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class typeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */  
    public function definition()
    {
        return [
            'title' => fake()->text(10),
            'status' => Arr::random([1,2]),
            'content' =>fake()->text(200),
        ];
    }
}
