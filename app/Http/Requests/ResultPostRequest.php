<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultPostRequest extends FormRequest
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
        ];
    }
    public function messages(): array
    {
        return [
            'exam.required' => 'Select Your Class',
            'year.required' => 'Select Year',
            'roll_no.required' => 'Enter your Roll no.',
            'reg_no.required' => 'Enter your Registration no.',
        ];
    }
}
