<?php

namespace App\Repositories\Interfaces;


use App\Entities\Employee;

interface IEmployeeRepository
{
    public function __construct();

    public function get();

    public function getById($id);

    public function insert(Employee $employee);

    public function update(Employee $employee);

    public function delete($id);
}