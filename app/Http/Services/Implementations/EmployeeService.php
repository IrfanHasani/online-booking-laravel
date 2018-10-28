<?php

namespace App\Http\Services\Implementations;


use App\Entities\Employee;
use App\Entities\EmployeeService as EmployeServiceEntity;
use App\Entities\EmployeeServiceViewModel;
use App\Http\Services\Interfaces\IEmployeeService;
use App\Repositories\Interfaces\IEmployeeRepository;
use App\Repositories\Interfaces\IServiceEmployeeRepository;
use App\Repositories\Interfaces\IWorkingHourRepository;

class EmployeeService implements IEmployeeService
{

    protected $employeeRepository, $serviceEmployeeRepository, $workingHourRepository;

    public function __construct(IEmployeeRepository $employeeRepository, IServiceEmployeeRepository $serviceEmployeeRepository, IWorkingHourRepository $workingHourRepository)
    {
        $this->employeeRepository = $employeeRepository;
        $this->serviceEmployeeRepository = $serviceEmployeeRepository;
        $this->workingHourRepository = $workingHourRepository;
    }

    public function get()
    {
        return $this->employeeRepository->get();
    }

    public function getById($id)
    {
        return $this->employeeRepository->getById($id);
    }

    public function insert(EmployeeServiceViewModel $employeeServiceViewModel)
    {
        $employee = $this->employeeRepository->insert($employeeServiceViewModel->toEmployee());
        $workingHour = $employeeServiceViewModel->toWorkingHour();
        $workingHour->employee_id = $employee->id;
        $this->workingHourRepository->insert($workingHour);
        if ($employeeServiceViewModel->checked_values != null) {
            $checkedValues = explode(',', $employeeServiceViewModel->checked_values);
            foreach ($checkedValues as $checkedValue) {
                $employeService = new EmployeServiceEntity();
                $employeService->employee_id = $employee->id;
                $employeService->service_id = $checkedValue;
                $this->serviceEmployeeRepository->insert($employeService);
            }
        }
        return $employee;
    }

    public function update(EmployeeServiceViewModel $employeeServiceViewModel, Employee $employee)
    {
        $employee = $this->employeeRepository->update($employee->fill($employeeServiceViewModel->toArray()));
        $workingHour = $employee->workingHour->first();
        $this->workingHourRepository->update($workingHour->fill($employeeServiceViewModel->toArray()));
        $checkedValues = explode(',', $employeeServiceViewModel->checked_values);
        if ($checkedValues[0] == '')
            $checkedValues = [];
        $employeseServices = $this->serviceEmployeeRepository->get()->where('employee_id', $employee->id);
        foreach ($employeseServices as $employeseService)
            $this->serviceEmployeeRepository->delete($employeseService->id);
        foreach ($checkedValues as $checkedValue) {
            $employeService = new EmployeServiceEntity();
            $employeService->employee_id = $employee->id;
            $employeService->service_id = $checkedValue;
            $this->serviceEmployeeRepository->insert($employeService);
        }


        return $this->employeeRepository->update($employee);
    }

    public function delete($id)
    {
        return $this->employeeRepository->delete($id);
    }
}