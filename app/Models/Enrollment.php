<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    /** @use HasFactory<\Database\Factories\EnrollmentFactory> */
    use HasFactory;

    protected $fillable =[
        'semester',
        'statue',
        'course_id',
        'student_id',
        'instructor_id',
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

    function students()
    {
        return $this->belongsTo(Student::class);
    }
    function courses()
    {
        return $this->belongsTo(Course::class);
    }
    function instructors()
    {
        return $this->belongsTo(Instructor::class);
    }


}
