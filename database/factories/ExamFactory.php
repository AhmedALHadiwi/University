<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        function getRandomDate() {

            $months = [1, 2, 3, 4, 11, 12];

            $year = rand(2018, 2024);

            $month = $months[array_rand($months)];

            $day = rand(1, 28);

            $date = \DateTime::createFromFormat('Y-m-d', "$year-$month-$day");

            return $date->format('Y-m-d');
        };



        $rand_course_id = Course::all()->random()->id ;

        return [
            'course_id' => $rand_course_id,
            'exam_date' => getRandomDate(),
            'duration' => fake()->randomElement(['01:00:00','01:30:00','02:00:00','03:00:00']),
            'exam_type' => fake()->randomElement(['final','midterm']),
        ];
    }
}
