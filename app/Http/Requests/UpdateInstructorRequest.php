<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInstructorRequest extends FormRequest
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
            'instructor_name' => 'string',
            'email' => 'email',
            'phone_number' => 'regex:/01[0125][\d]{8}/|unique:instructors,phone_number',
            'instructor_role' => 'string|in:Dr,TA',
        ];
    }
}
