<?php

namespace App\Http\Controllers;

use App\Repositories\DepartmentRepository;
use App\Repositories\EmployeeRepository;
use App\Transformers\DepartmentTransformer;
use App\Transformers\EmployeeTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param EmployeeRepository $employee
     * @param EmployeeTransformer $emptransformer
     * @param DepartmentRepository $department
     * @param DepartmentTransformer $deptTransformer
     */
    public function __construct(EmployeeRepository $employee, EmployeeTransformer $emptransformer,
                                DepartmentRepository $department, DepartmentTransformer $deptTransformer)
    {
        $this->employee         = $employee;
        $this->empTransformer   = $emptransformer;
        $this->derpartment      = $department;
        $this->deptTransformer  = $deptTransformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userInput   = $request->all();

        $departments = $this->derpartment->search($userInput)->get();
        $employees   = $this->employee->search($userInput)->paginate(15);

        // convert it into a formatted array
        $data['departments']  = $this->deptTransformer->transformCollection($departments);
        // convert it into a formatted array
        $data['employees']    = $this->empTransformer->transformCollection($employees);
        $data['pagination']   = $employees->render();
        $data['input']        = $userInput;

        // return composed data
        return response()->view('search', [
            'data' => $data
        ]);
    }
}
