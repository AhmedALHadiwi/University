<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $courses = [
            "08:00" => "10:00",
            "10:30" => "12:30",
            "13:00" => "15:00",
            "15:30" => "17:30",
            "08:30" => "10:00",
            "11:30" => "12:30",
            "13:30" => "15:00",
            "16:30" => "17:30",
            "09:00" => "10:00",
        ];

        $rand_time = array_rand($courses);
        $rand_course_id = Course::all()->random()->id;

        $rand_classroom_id = Classroom::all()->random()->id;

        return [
            'course_id' => $rand_course_id,
            'classroom_id' => $rand_classroom_id,
            'day_of_week' => fake()->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']),
            'start_time' => $rand_time[0],
            'end_time' => $rand_time[1],
        ];
    }
}
