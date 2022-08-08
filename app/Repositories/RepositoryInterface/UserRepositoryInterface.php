<?php
namespace App\Repositories\RepositoryInterface;

use App\Repositories\BaseRepositoryInterface;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function logicCreate($data = []);
}
