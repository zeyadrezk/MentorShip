<?php

namespace App\Services;

use App\Interfaces\EmployeeInterface;
use App\Models\Student;

class studentService implements EmployeeInterface
{

    public function create($request)
    {
       return  Student::Create($request);
    }

    public function show($id)
    {
        return  Student::findOrFail($id);
    }

    public function update( $id, $request)
    {
        $student = Student::findOrFail($id);
        $student->update($request);
        return $student;
    }

    public function delete( $id)
    {
      return  Student::where('id', $id)->delete();
    }
}
