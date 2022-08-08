<?php
namespace App\Repositories\RepositoryInterface;

use App\Repositories\BaseRepositoryInterface;

interface OrderDetailRepositoryInterface extends BaseRepositoryInterface
{
    public function logicCreate($data = []);
}

