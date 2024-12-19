<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faculties = [
            "Faculty of Computer Science",
            "Faculty of Engineering",
            "Faculty of Medicine",
            "Faculty of Business Administration",
            "Faculty of Arts",
            "Faculty of Science",
            "Faculty of Law",
            "Faculty of Education",
            "Faculty of Pharmacy",
            "Faculty of Dentistry",
            "Faculty of Agriculture",
            "Faculty of Architecture",
            "Faculty of Fine Arts",
            "Faculty of Economics",
            "Faculty of Veterinary Medicine"
        ];

        // Example usage: printing faculty names
        foreach ($faculties as $faculty) {
            Faculty::factory()->create([
                'faculty_name'=>$faculty,
                'degree_level' => fake()->randomElement(['Bachelor', 'Master', 'PhD']),
            ]);
        }


    }
}
