<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Service extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price'
    ];

    public function employeeServices()
    {
        return $this->hasMany('App\Entities\EmployeeService','service_id');
    }

    public function appointments()
    {
        return $this->hasMany('App\Entities\Appointment','service_id');
    }
}
