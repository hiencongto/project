<?php
namespace App\Repositories\RepositoryInterface;

use App\Repositories\BaseRepositoryInterface;

interface BrandRepositoryInterface extends BaseRepositoryInterface
{
    public function logicCreate($data = []);
}

