<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EmployeeService extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id', 'service_id'
    ];

    public function service()
    {
        return $this->belongsTo('App\Entities\Service','service_id');
    }

    public function employee()
    {
        return $this->belongsTo('App\Entities\Employee','employee_id');
    }
}
