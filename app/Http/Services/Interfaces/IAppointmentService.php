<?php

namespace App\Http\Services\Interfaces;


use App\Entities\Appointment;
use App\Repositories\Interfaces\IAppointmentRepository;

interface IAppointmentService
{
    public function __construct(IAppointmentRepository $appointmentRepository);

    public function get();

    public function getById($id);

    public function insert(Appointment $appointment);

    public function update(Appointment $appointment);

    public function delete($id);
}