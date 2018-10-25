<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class EmployeeServiceViewModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email','checked_values'
    ];

    public function toEmployee()
    {
        $employee = new Employee();
        $employee->first_name = $this->first_name;
        $employee->last_name = $this->last_name;
        $employee->phone = $this->phone;
        $employee->email = $this->email;
        return $employee;
    }
}
