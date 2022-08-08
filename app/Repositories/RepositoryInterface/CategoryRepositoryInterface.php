<?php
namespace App\Repositories\RepositoryInterface;

use App\Repositories\BaseRepositoryInterface;

interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    public function logicCreate($data = []);
}
