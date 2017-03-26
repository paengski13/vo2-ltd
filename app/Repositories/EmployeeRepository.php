<?php

namespace App\Repositories;

use App\Models\Employees;
use Illuminate\Support\Facades\DB;

/**
 * Class EmployeeRepository
 *
 * This performs all enum data requests
 */
class EmployeeRepository
{
    /**
     * Constructor
     *
     * Initialize all needed classes
     *
     * @param Employees $employee
     */
    public function __construct(Employees $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Create a single record
     *
     * @param array $userInput
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function create($userInput)
    {
        return $this->employee->create([
            'first_name'     => $userInput['first_name'],
            'last_name'      => $userInput['last_name'],
            'department_id'  => $userInput['department_id'],
            'profile'        => $userInput['profile'],
        ]);
    }

    /**
     * Get employee record/s, based on user search input
     *
     * @param array $search
     * @return object $languages
     */
    public function search($search = [])
    {
        $employee = $this->employee->with('department');

        if (array_key_exists('search_name', $search) && ! empty($search['search_name'])) {
            $employee = $employee->orWhere(function ($query) use ($search) {
                $query->where('first_name', 'LIKE', '%' . $search['search_name'] . '%')
                    ->orwhere('last_name', 'LIKE', '%' . $search['search_name'] . '%')
                    ->orwhere(DB::raw("concat_ws(' ',first_name,last_name)"), 'LIKE', '%' . $search['search_name'] . '%');
            });
        }

        if (array_key_exists('search_department', $search) && ! empty($search['search_department'])) {
            $employee = $employee->whereHas('department', function ($query) use ($search) {
                $query->where('id', $search['search_department']);
            });
        }

        return $employee;
    }
}
