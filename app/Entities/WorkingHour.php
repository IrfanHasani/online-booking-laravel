<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id', 'date', 'start_time', 'finish_time'
    ];

    public function employees()
    {
        return $this->belongsTo('App\Entities\Employee', 'employee_id');
    }
}
