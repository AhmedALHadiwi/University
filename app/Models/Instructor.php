<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    /** @use HasFactory<\Database\Factories\InstructorFactory> */
    use HasFactory;


    protected $fillable = [
        'instructor_name',
        'email',
        'phone_number',
        'hire_date',
        'instructor_role',
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
}
