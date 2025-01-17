<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'course_name' => 'string|unique:courses,course_name',
            'course_code' => 'string|unique:courses,course_code',
            'credit_hours' => 'integer',
            'faculty_id' => 'integer|exists:faculties,id'
        ];
    }
}
