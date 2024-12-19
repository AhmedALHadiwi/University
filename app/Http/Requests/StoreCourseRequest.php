<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
            'course_name'=>'required|string|unique:courses,course_name',
            'course_code'=>'required|string|unique:courses,course_code',
            'credit_hours'=>'required|integer',
            'faculty_id'=>'required|integer|exists:faculties,id'
        ];
    }
}
