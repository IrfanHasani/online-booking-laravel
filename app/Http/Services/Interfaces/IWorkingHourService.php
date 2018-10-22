<?php

namespace App\Http\Services\Interfaces;

use App\Entities\WorkingHour;
use App\Repositories\Interfaces\IWorkingHourRepository;

interface IWorkingHourService
{
    public function __construct(IWorkingHourRepository $workingHourRepository);

    public function get();

    public function getById($id);

    public function insert(WorkingHour $workingHour);

    public function update(WorkingHour $workingHour);

    public function delete($id);
}