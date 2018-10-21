<?php

namespace App\Repositories\Interfaces;


use App\Entities\Service;

interface IServiceRepository
{
    public function __construct();

    public function get();

    public function getById($id);

    public function insert(Service $service);

    public function update(Service $service);

    public function delete($id);
}