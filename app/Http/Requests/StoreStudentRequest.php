<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'gender' => 'required|string|in:male,female',
            'phone_number' => 'required|regex:/01[0125][\d]{8}/|unique:students,phone_number',
            'date_of_birth' => 'required|date',
            'student_address' => 'required|string',
            'faculty_id' => 'required|integer',
            'department_id' => 'required|integer',
        ];
    }
}
