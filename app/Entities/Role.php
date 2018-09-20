<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use Notifiable;
    //
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->hasMany('App\Entities\User','role_id');
    }
}
