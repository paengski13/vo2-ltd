<?php

namespace App\Repositories;

use App\Models\Departments;

/**
 * Class DepartmentRepository
 *
 * This performs all enum data requests
 */
class DepartmentRepository
{
    /**
     * Constructor
     *
     * Initialize all needed classes
     *
     * @param Departments $department
     */
    public function __construct(Departments $department)
    {
        $this->department = $department;
    }

    /**
     * Create a single record
     *
     * @param array $userInput
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function create($userInput)
    {
        return $this->department->create([
            'name' => $userInput['name'],
        ]);
    }

    /**
     * Get department record/s, based on user search input
     *
     * @param array $search
     * @return object $languages
     */
    public function search($search = [])
    {
        $department = $this->department;

        if (array_key_exists('name', $search)) {
            $department = $department->where('name', $search['name']);
        }

        return $department;
    }
}
