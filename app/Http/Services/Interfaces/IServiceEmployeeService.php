<?php

namespace App\Http\Services\Interfaces;


use App\Entities\EmployeeService;
use App\Repositories\Interfaces\IServiceEmployeeRepository;

interface IServiceEmployeeService
{
    public function __construct(IServiceEmployeeRepository $serviceEmployeeRepository);

    public function get();

    public function getById($id);

    public function insert(EmployeeService $employeeService);

    public function update(EmployeeService $employeeService);

    public function delete($id);
}