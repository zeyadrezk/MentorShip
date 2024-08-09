<?php

namespace App\Services;

use App\Interfaces\EmployeeInterface;
use App\Models\Employee;

class SecretarialService implements EmployeeInterface
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
        $secertarial = Employee::findOrFail($id);
        $secertarial->update($request);
        return $secertarial;
    }

    public function delete( $id)
    {
        return  Employee::where('id', $id)->delete();
    }

}
