<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(2,10),
            'name' => $this->faker->unique()->word, // A single unique word
            'director' => $this->faker->name,
            'path' => $this->faker->url
        ];
    }
}