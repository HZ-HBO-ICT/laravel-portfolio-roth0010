<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'quartile' => $this->faker->numberBetween(1, 4),
            'credits' => $this->faker->numberBetween(1,12)
        ];
    }
}
