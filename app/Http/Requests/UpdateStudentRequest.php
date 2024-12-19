<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'first_name' => 'string',
            'last_name' => 'string',
            'email' => 'email',
            'gender' => 'string|in:male,female',
            'phone_number' => 'required|regex:/01[0125][\d]{8}/|unique:students,phone_number',
            'date_of_birth' => 'date',
            'student_address' => 'string',
            'faculty_id' => 'integer',
            'department_id' => 'integer',
        ];
    }
}
