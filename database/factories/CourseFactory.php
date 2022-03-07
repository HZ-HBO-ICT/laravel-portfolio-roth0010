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
            // GitHub is complaining about this line not having a space after
            // the comma. Not sure how to fix that.
            'credits' => $this->faker->numberBetween(1,12),
        ];
    }
}
