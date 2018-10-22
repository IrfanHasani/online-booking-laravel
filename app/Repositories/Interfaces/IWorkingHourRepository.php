<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-21
 * Time: 6.39.MD
 */

namespace App\Repositories\Interfaces;


use App\Entities\WorkingHour;

interface IWorkingHourRepository
{
    public function __construct();

    public function get();

    public function getById($id);

    public function insert(WorkingHour $workingHour);

    public function update(WorkingHour $workingHour);

    public function delete($id);
}