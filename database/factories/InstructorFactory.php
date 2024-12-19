<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'instructor_name' => fake()->name() ,
            'email' => fake()->unique()->safeEmail() ,
            'phone_number' =>  fake()->unique()->e164PhoneNumber(),
            'instructor_role' => fake()->randomElement(['Dr','TA']) ,
        ];
    }
}
