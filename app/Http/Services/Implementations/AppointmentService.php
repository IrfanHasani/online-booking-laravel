<?php

namespace App\Http\Services\Implementations;


use App\Entities\Appointment;
use App\Http\Services\Interfaces\IAppointmentService;
use App\Repositories\Interfaces\IAppointmentRepository;

class AppointmentService implements IAppointmentService
{
    protected $appointmentRepository;

    public function __construct(IAppointmentRepository $appointmentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
    }

    public function get()
    {
        return $this->appointmentRepository->get();
    }

    public function getById($id)
    {
        return $this->appointmentRepository->getById($id);
    }

    public function insert(Appointment $appointment)
    {
        return $this->appointmentRepository->insert($appointment);
    }

    public function update(Appointment $appointment)
    {
        return $this->appointmentRepository->update($appointment);
    }

    public function delete($id)
    {
        return $this->appointmentRepository->delete($id);
    }

}