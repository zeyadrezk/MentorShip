<?php

namespace App\Http\Controllers;

use App\Creational\AbstractFactory\PersonAbstractFactory;
use App\Factories\EmployeeFactory;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeFactory;
    public function __construct(EmployeeFactory $employeeFactory)
    {
        $this->employeeFactory = $employeeFactory;
    }

    /**
     * @throws \Exception
     */
    public function store(EmployeeRequest $request)
    {
        $employee = $this->employeeFactory->Employee($request->role);
        $employee = $employee->create($request->validated());

        return response()->json([
            'message' => 'Created successfully',
            'data' => $employee
        ], 200);
    }

    /**
     * @throws \Exception
     */
    public function show($id)
    {
        $employee = $this->employeeFactory->Employee(request()->role);
        $employee = $employee->show($id);

        return response()->json([
            'message' => 'success',
            'data' => $employee
        ], 200);
    }

    /**
     * @throws \Exception
     */
    public function update($id, EmployeeRequest $request)
    {
        $employee = $this->employeeFactory->Employee($request->role);
        $employee = $employee->update($id, $request->validated());

        return response()->json([
            'message' => 'Updated successfully',
            'data' => $employee
        ], 200);
    }

    /**
     * @throws \Exception
     */
    public function destroy($id)
    {
        $employee =  $this->employeeFactory->Employee(request()->role);
        $employee->delete($id);

        return response()->json([
            'message' => 'deleted successfully',
            'data' => []
        ], 200);
    }


}
