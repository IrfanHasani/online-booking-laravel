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
        'first_name', 'last_name', 'phone', 'email','checked_values','date','start_time','finish_time'
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

    public function toWorkingHour()
    {
        $workingHour = new WorkingHour();
        $workingHour->date = $this->date;
        $workingHour->start_time = $this->start_time;
        $workingHour->finish_time = $this->finish_time;
        return $workingHour;
    }
}
