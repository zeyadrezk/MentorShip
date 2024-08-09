<?php

namespace App\Factories;


use App\Services\SecretarialService;
use App\Services\studentService;
use App\Services\TeacherService;

class EmployeeFactory
{

    /**
     * @throws \Exception
     */
    public function Employee($role)
    {
        if ($role == "student") {
            return new studentService();
        } elseif ($role == "teacher") {
            return new teacherService();
        } elseif ($role == "secretarial") {
            return new secretarialService();
        } else {
            throw new \Exception("Invalid role");
        }

    }


}
