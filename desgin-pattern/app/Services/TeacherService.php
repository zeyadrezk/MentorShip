<?php

namespace App\Services;

use App\Interfaces\EmployeeInterface;
use App\Models\Employee;
class TeacherService implements EmployeeInterface
{

    public function create($request)
    {
        return  Employee::Create($request);
    }

    public function show($id)
    {
        return  Employee::findOrFail($id);
    }

    public function update( $id, $request)
    {
        $teacher = Employee::findOrFail($id);
        $teacher->update($request);
        return $teacher;
    }

    public function delete( $id)
    {
        return  Employee::where('id', $id)->delete();
    }

}
