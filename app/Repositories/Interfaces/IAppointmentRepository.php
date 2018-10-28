<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-27
 * Time: 3.51.MD
 */

namespace App\Repositories\Interfaces;


use App\Entities\Appointment;

interface IAppointmentRepository
{
    public function __construct();

    public function get();

    public function getById($id);

    public function insert(Appointment $appointment);

    public function update(Appointment $appointment);

    public function delete($id);
}