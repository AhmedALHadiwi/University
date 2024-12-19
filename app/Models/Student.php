<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable= [
        'first_name' ,
        'last_name' ,
        'email',
        'phone_number',
        'gender',
        "date_of_birth",
        "student_address",
        "faculty_id",
        "department_id",
        'created_at' ,
        'deleted_at' ,
    ];

    protected $hidden =[
        'created_at' ,
        'deleted_at' ,
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
    function payments()
    {
        return $this->hasMany(Payment::class);
    }

    function faculties()
    {
        return $this->belongsTo(Faculty::class);
    }
    function departments()
    {
        return $this->belongsTo(Department::class);
    }
}
