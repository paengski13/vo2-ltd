<?php

use Illuminate\Database\Seeder;
use App\Repositories\DepartmentRepository;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param DepartmentRepository $departmentRepo
     * @return void
     */
    public function run(DepartmentRepository $departmentRepo)
    {
        $departments = [
            'Sales',
            'Accounts',
            'IT Support',
            'Marketing',
            'Research',
            'Engineering',
            'Legal',
            'Human Resources',
        ];

        foreach ($departments as $department) {
            $departmentRepo->create([
                'name' => $department
            ]);
        }
    }
}
