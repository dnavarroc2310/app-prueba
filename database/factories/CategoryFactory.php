<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //ucfirst es para que la primera letra sea mayuscula
        //fake()->word() es para que genere una palabra aleatoria
        return [
            'name' => ucfirst(fake()->word())
        ];
    }
}
