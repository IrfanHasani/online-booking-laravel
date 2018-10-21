<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-21
 * Time: 3.16.MD
 */

namespace App\Http\Services\Implementations;


use App\Entities\Service;
use App\Http\Services\Interfaces\IService;
use App\Repositories\Interfaces\IServiceRepository;

class ServiceService implements IService
{
    protected $serviceRepository;

    public function __construct(IServiceRepository $serviceRepository)
    {
        $this->serviceRepository =  $serviceRepository;
    }

    public function get()
    {
        return $this->serviceRepository->get();
    }

    public function getById($id)
    {
        return $this->serviceRepository->getById($id);
    }

    public function insert(Service $service)
    {
        return $this->serviceRepository->insert($service);
    }

    public function update(Service $service)
    {
        return $this->serviceRepository->update($service);
    }

    public function delete($id)
    {
        return $this->serviceRepository->delete($id);
    }

}