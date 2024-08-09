<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'role' => 'required|in:teacher',
            'age' => 'required|integer|min:18|max:100',
            'salary' => 'nullable|numeric|min:0',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'start_work' => 'nullable|date_format:H:i',
            'end_work' => 'nullable|date_format:H:i',
        ];
    }
}
