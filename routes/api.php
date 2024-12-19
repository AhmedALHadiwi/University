<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(UserController::class)
    ->group(function () {
        Route::post('login', 'login');
    });

Route::controller(AllController::class)->group(function () {
    Route::get('view','AllController');
});

Route::apiResource('users', UserController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('classrooms', ClassroomController::class);
Route::apiResource('courses', CourseController::class);
Route::apiResource('departments', DepartmentController::class);
Route::apiResource('enrollments', EnrollmentController::class);
Route::apiResource('exams', ExamController::class);
Route::apiResource('faculties', FacultyController::class);
Route::apiResource('instructors', InstructorController::class);
Route::apiResource('payments', PaymentController::class);
Route::apiResource('schedules', ScheduleController::class);
