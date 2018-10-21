<?php

namespace App\Http\Services\Implementations;


use App\Entities\Employee;
use App\Http\Services\Interfaces\IEmployeeService;
use App\Repositories\Interfaces\IEmployeeRepository;

class EmployeeService implements IEmployeeService
{

    protected $employeeRepository;

    public function __construct(IEmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function get()
    {
        return $this->employeeRepository->get();
    }

    public function getById($id)
    {
        return $this->employeeRepository->getById($id);
    }

    public function insert(Employee $employee)
    {
        return $this->employeeRepository->insert($employee);
    }

    public function update(Employee $employee)
    {
        return $this->employeeRepository->update($employee);
    }


    public function delete($id)
    {
        return $this->employeeRepository->delete($id);
    }
}