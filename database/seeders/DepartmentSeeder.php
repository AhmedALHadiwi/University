<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
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

        $rand_faculty_id = Faculty::all()->random()->id;

        foreach ($departments as $department) {
            Department::factory()->created([
                'department_name' => $department,
                'faculty_id' => $rand_faculty_id,
            ]);
        }
    }
}
