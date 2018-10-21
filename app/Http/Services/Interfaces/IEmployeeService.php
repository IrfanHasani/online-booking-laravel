<?php

namespace App\Http\Services\Interfaces;

use App\Entities\Employee;
use App\Repositories\Interfaces\IEmployeeRepository;

interface IEmployeeService
{
    public function __construct(IEmployeeRepository $employeeRepository);

    public function get();

    public function getById($id);

    public function insert(Employee $employee);

    public function update(Employee $employee);

    public function delete($id);

}