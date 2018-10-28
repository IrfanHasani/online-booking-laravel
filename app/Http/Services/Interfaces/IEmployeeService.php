<?php

namespace App\Http\Services\Interfaces;

use App\Entities\Employee;
use App\Entities\EmployeeServiceViewModel;
use App\Repositories\Interfaces\IEmployeeRepository;
use App\Repositories\Interfaces\IServiceEmployeeRepository;
use App\Repositories\Interfaces\IWorkingHourRepository;

interface IEmployeeService
{
    public function __construct(IEmployeeRepository $employeeRepository, IServiceEmployeeRepository $serviceEmployeeRepository, IWorkingHourRepository $workingHourRepository);

    public function get();

    public function getById($id);

    public function insert(EmployeeServiceViewModel $employeeServiceViewModel);

    public function update(EmployeeServiceViewModel $employeeServiceViewModel, Employee $employee);

    public function delete($id);

}