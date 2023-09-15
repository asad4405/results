<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentAddPostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            '*' => 'required',
            'birthday_certificate_no' => 'required|integer',
            'session_year' => 'required|integer',
        ];
    }
    public function messages(): array
    {
        return [
            'student_name.required' => 'Enter Student Name',
            'fathers_name.required' => 'Enter Student Fathers Name',
            'mothers_name.required' => 'Enter Student Mothers Name',
            'class_name.required' => 'Enter Student Class',
            'address.required' => 'Enter Student Address',
            'session_year.required' => 'Enter Student Session Year must be an integer',
            'session_year.integer' => 'Student Session Year',
            'group.required' => 'Enter Student Group',
            'student_type.required' => 'Enter Student Type',
            'gender.required' => 'Enter Student Genter',
            'birthday_date.required' => 'Enter Student Birthday Date',
            'birthday_certificate_no.required' => 'Enter Student Birthday Certificate No.',
            'birthday_certificate_no.integer' => 'Student Birthday Certificate No. must be an integer',
            'school_name.required' => 'Enter Student School Name',
            'phone_number.required' => 'Enter Student Phone Number',
            'guardians_phone_number.required' => 'Enter Guardians Phone Number',
        ];
    }
}
