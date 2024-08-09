<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'role' => 'required|in:student',
            'age' => 'required|integer|min:0',
            'salary' => 'nullable|numeric|min:0',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'parent_phone' => 'nullable|string|max:15',
            'parent_name' => 'nullable|string|max:255',
        ];
    }
}
