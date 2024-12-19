<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
    use HasFactory;


    protected $fillable = [
        'course_id',
        'classroom_id',
        'day_of_week',
        'start_time',
        'end_time',
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

    function courses()
    {
        return $this->belongsTo(Course::class);
    }

    function classrooms()
    {
        return $this->belongsTo(Classroom::class);
    }
}
