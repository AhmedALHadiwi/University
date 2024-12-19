<?php

namespace Database\Factories;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $departments = [
            "Computer Science",
            "Software Engineering",
            "Information Technology",
            "Electrical Engineering",
            "Mechanical Engineering",
            "Civil Engineering",
            "Biotechnology",
            "Physics",
            "Chemistry",
            "Mathematics",
            "Business Administration",
            "Economics",
            "Psychology",
            "Architecture",
            "Law"
        ];

        $rand_dapartment = array_rand($departments);

        $rand_faculty_id = Faculty::all()->random()->id;

        return [
            'department_name' => $rand_dapartment,
            'faculty_id' => $rand_faculty_id,
        ];
    }
}
