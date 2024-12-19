<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;

    protected $fillable =[
        'department_name',
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

    function students()
    {
        return $this->hasMany(Student::class);
    }

    function faculties()
    {
        return $this->belongsTo(Faculty::class);
    }
}
