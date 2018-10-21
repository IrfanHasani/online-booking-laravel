<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-21
 * Time: 3.08.MD
 */

namespace App\Repositories\Implementations;


use App\Entities\Service;
use App\Repositories\Interfaces\IServiceRepository;

class ServiceRepository implements IServiceRepository
{

    public function __construct()
    {
    }

    public function get()
    {
        return Service::all();
    }

    public function getById($id)
    {
        return Service::find($id);
    }

    public function insert(Service $service)
    {
       $service->save();
       return $service;
    }

    public function update(Service $service)
    {
        $service->update();
        return $service;
    }

    public function delete($id)
    {
        return $this->getById($id)->delete();
    }
}