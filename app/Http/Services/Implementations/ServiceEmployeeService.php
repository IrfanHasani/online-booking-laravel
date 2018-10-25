<?php

namespace App\Http\Services\Implementations;


use App\Http\Services\Interfaces\IServiceEmployeeService;
use App\Repositories\Interfaces\IServiceEmployeeRepository;
use App\Entities\EmployeeService as EmployeeServiceEntity;

class ServiceEmployeeService implements IServiceEmployeeService
{
    protected $serviceEmployeeRepository;

    public function __construct(IServiceEmployeeRepository $serviceEmployeeRepository)
    {
        $this->serviceEmployeeRepository = $serviceEmployeeRepository;
    }

    public function get()
    {
        return $this->serviceEmployeeRepository->get();
    }

    public function getById($id)
    {
        return $this->serviceEmployeeRepository->getById($id);
    }

    public function insert(EmployeeServiceEntity $employeeService)
    {
        return $this->serviceEmployeeRepository->insert($employeeService);
    }

    public function update(EmployeeServiceEntity $employeeService)
    {
        return $this->serviceEmployeeRepository->update($employeeService);
    }

    public function delete($id)
    {
        return $this->serviceEmployeeRepository->delete($id);
    }

}