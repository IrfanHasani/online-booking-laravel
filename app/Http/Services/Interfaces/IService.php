<?php

namespace App\Http\Services\Interfaces;

use App\Entities\Service;
use App\Repositories\Interfaces\IServiceRepository;

interface IService
{
    public function __construct(IServiceRepository $serviceRepository);

    public function get();

    public function getById($id);

    public function insert(Service $service);

    public function update(Service $service);

    public function delete($id);
}