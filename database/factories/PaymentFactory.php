<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $rand_student_id = Student::all()->random()->id;

        return [
            'student_id' => $rand_student_id,
            'amount' => fake()->randomNumber(),
            'payment_method' => fake()->randomElement(['cash', 'credit']),
        ];
    }
}
