<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEnrollmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'semester' => 'string',
            'statue' => 'string|in:fail,success',
            'course_id' => 'integer|exists:courses,id',
            'student_id' => 'integer|exists:students,id',
            'instructor_id' => 'integer|exists:instructors,id',
        ];
    }
}
