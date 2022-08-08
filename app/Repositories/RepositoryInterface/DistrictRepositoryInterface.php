<?php
namespace App\Repositories\RepositoryInterface;

use App\Repositories\BaseRepositoryInterface;

interface DistrictRepositoryInterface extends BaseRepositoryInterface
{
    public function logicCreate($data = []);
}

