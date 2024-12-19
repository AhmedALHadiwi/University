<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable =[
        'course_name',
        'course_code',
        'credit_hours',
        'faculty_id',
    ];

    public function setUpdatedAtAttribute($value)
    {
        $this->attributes['updated_at'] = Carbon::parse($value)->format('Ymd H:i:s');
    }

    // Mutator for created_at
    public function setCreatedAtAttribute($value)
    {
        $this->attributes['created_at'] = Carbon::parse($value)->format('Ymd H:i:s');
    }


    function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    function exams()
    {
        return $this->hasMany(Exam::class);
    }

    function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    function faculties()
    {
        return $this->belongsTo(Faculty::class);
    }
}
