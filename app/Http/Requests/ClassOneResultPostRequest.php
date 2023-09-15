<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassOneResultPostRequest extends FormRequest
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
            'bangla' => 'required|integer|max:100',
            'english' => 'required|integer|max:100',
            'math' => 'required|integer|max:100',
        ];
    }
    public function messages(): array
    {
        return [
            //
        ];
    }
}
