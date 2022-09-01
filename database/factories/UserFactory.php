<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastname(),
            'first_name' => $this->faker->firstname(),
            'middle_name' => $this->faker->lastname(),
            'address' => $this->faker->address(),
            'salary' => $this->faker->randomNumber(5),

        ];
    }

}
