<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInstructorRequest extends FormRequest
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
            'instructor_name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|unique:instructors,phone_number|regex:/01[0125][\d]{8}/',
            'instructor_role' => 'required|string|in:Dr,TA',
        ];
    }
}
