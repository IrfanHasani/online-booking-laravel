<?php

namespace App\Repositories\Implementations;


use App\Entities\Appointment;
use App\Repositories\Interfaces\IAppointmentRepository;

class AppointmentRepository implements IAppointmentRepository
{
    public function __construct()
    {
    }

    public function get()
    {
        return Appointment::all();
    }

    public function getById($id)
    {
        return Appointment::find($id);
    }

    public function insert(Appointment $appointment)
    {
        $appointment->save();
        return $appointment;
    }

    public function update(Appointment $appointment)
    {
        $appointment->update();
        return $appointment;
    }

    public function delete($id)
    {
        return $this->getById($id)->delete();
    }

}