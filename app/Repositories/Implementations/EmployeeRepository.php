<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-21
 * Time: 11.38.PD
 */

namespace App\Repositories\Implementations;


use App\Entities\Employee;
use App\Repositories\Interfaces\IEmployeeRepository;

class EmployeeRepository implements IEmployeeRepository
{

    public function __construct()
    {
    }

    public function get()
    {
        return Employee::all();
    }

    public function getById($id)
    {
        return Employee::find($id);
    }

    public function insert(Employee $employee)
    {
        $employee->save();
        return $employee;
    }

    public function update(Employee $employee)
    {
        $employee->update();
        return $employee;
    }


    public function delete($id)
    {
        return $this->getById($id)->delete();
    }
}