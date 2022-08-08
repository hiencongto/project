<?php
namespace App\Repositories\RepositoryInterface;

use App\Repositories\BaseRepositoryInterface;

interface OrderRepositoryInterface extends BaseRepositoryInterface
{
    public function logicCreate($data = []);
}

