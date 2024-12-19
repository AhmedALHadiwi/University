<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $semesters = [
            "Fall 2018",
            "Spring 2019",
            "Summer 2019",
            "Fall 2019",
            "Spring 2020",
            "Summer 2020",
            "Fall 2020",
            "Spring 2021",
            "Summer 2021",
            "Fall 2021",
            "Spring 2022",
            "Summer 2022",
            "Fall 2022",
            "Spring 2023",
            "Summer 2023",
            "Fall 2023",
            "Spring 2024",
            "Summer 2024"
        ];

        $rand_semester = array_rand($semesters);

        // $rand_statue = array_rand(['fail','success']);

        $rand_student_id = Student::all()->random()->id;

        $rand_course_id = Course::all()->random()->id;

        $rand_instructor_id = Instructor::all()->random()->id;

        return [
            'semester' => fake()->randomElement($semesters) ,
            'statue' =>  fake()->randomElement(['fail','success']),
            'course_id' =>  $rand_course_id ,
            'student_id' => $rand_student_id ,
            'instructor_id' => $rand_instructor_id ,
        ];
    }
}
