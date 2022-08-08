<?php
namespace App\Repositories\RepositoryInterface;

use App\Repositories\BaseRepositoryInterface;

interface ProvinceRepositoryInterface extends BaseRepositoryInterface
{
    public function logicCreate($data = []);
}
