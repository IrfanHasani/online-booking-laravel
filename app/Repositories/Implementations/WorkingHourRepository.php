<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-21
 * Time: 6.39.MD
 */

namespace App\Repositories\Implementations;


use App\Entities\WorkingHour;
use App\Repositories\Interfaces\IWorkingHourRepository;

class WorkingHourRepository implements IWorkingHourRepository
{
    public function __construct()
    {
    }

    public function get()
    {
        return WorkingHour::all();
    }

    public function getById($id)
    {
        return WorkingHour::find($id);
    }

    public function insert(WorkingHour $workingHour)
    {
        $workingHour->save();
        return $workingHour;
    }

    public function update(WorkingHour $workingHour)
    {
        $workingHour->update();
        return $workingHour;
    }

    public function delete($id)
    {
        return $this->getById($id)->delete();
    }

}