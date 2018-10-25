<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-24
 * Time: 6.47.MD
 */

namespace App\Repositories\Interfaces;


use App\Entities\EmployeeService;

interface IServiceEmployeeRepository
{
    public function __construct();

    public function get();

    public function getById($id);

    public function insert(EmployeeService $employeeService);

    public function update(EmployeeService $employeeService);

    public function delete($id);
}