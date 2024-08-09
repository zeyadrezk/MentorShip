<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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

//    public function rules(): array
//    {
//
//        $teacher = new TeacherRequest();
//        $student = new studentRequest();
//        $secretarial = new SecretarialRequest();
//
//        return array_merge($teacher->rules(), $student->rules() , $secretarial->rules());
//
//    }

    public function rules(): array
    {
        $role = $this->input('role');


        switch ($role) {
            case 'teacher':
                $teacher = new TeacherRequest();
                $rules = $teacher->rules();
                break;

            case 'student':
                $student = new StudentRequest();
                $rules = $student->rules();
                break;

            case 'secretarial':
                $secretarial = new SecretarialRequest();
                $rules = $secretarial->rules();
                break;

            default:

                $rules = [
                    'role' => 'required|in:teacher,student,secretarial',
                ];
                break;
        }

        return $rules;
    }

}
