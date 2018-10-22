<?php

namespace App\Http\Services\Implementations;


use App\Entities\WorkingHour;
use App\Http\Services\Interfaces\IWorkingHourService;
use App\Repositories\Interfaces\IWorkingHourRepository;

class WorkingHourService implements IWorkingHourService
{
    protected $workingHourRepository;

    public function __construct(IWorkingHourRepository $workingHourRepository)
    {
        $this->workingHourRepository = $workingHourRepository;
    }

    public function get()
    {
        return $this->workingHourRepository->get();
    }

    public function getById($id)
    {
        return $this->workingHourRepository->getById($id);
    }

    public function insert(WorkingHour $workingHour)
    {
        return $this->workingHourRepository->insert($workingHour);
    }

    public function update(WorkingHour $workingHour)
    {
        return $this->workingHourRepository->update($workingHour);
    }

    public function delete($id)
    {
        return $this->workingHourRepository->delete($id);
    }
}