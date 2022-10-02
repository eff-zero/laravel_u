<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'semester' => $this->faker->numberBetween(1, 10),
            'career' => $this->faker->randomElement(['Ing. Sistemas', 'Ing. Ambiental', 'Ing. Industrial',  'Ing. Quimica'])
        ];
    }
}
