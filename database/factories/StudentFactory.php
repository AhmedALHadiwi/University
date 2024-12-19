<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Faculty;
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
    public function definition(): array
    {
        $rand_faculty_id = Faculty::all()->random()->id;
        $rand_department_id = Department::all()->random()->id;

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->safeEmail(),
            'gender' => fake()->randomElement(['male', 'female']),
            'phone_number' => fake()->e164PhoneNumber(),
            'date_of_birth' => fake()->date(),
            'student_address' => fake()->address(),
            'faculty_id' => $rand_faculty_id,
            'department_id' => $rand_department_id,
        ];
    }
}
