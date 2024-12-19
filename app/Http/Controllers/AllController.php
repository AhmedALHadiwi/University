<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\Student;
use Illuminate\Http\Request;

class AllController extends Controller
{
    function AllController(){
        $students = Student::all();
        $instructors = Instructor::all();
        $courses = Course::all();
        $view = [
            'students' => $students,
            'instructors' => $instructors,
            'courses' => $courses
        ];

        return $this->http_response($view,200);
    }
}
