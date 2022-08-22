<?php
namespace App\Repositories\RepositoryInterface;

use App\Repositories\BaseRepositoryInterface;

interface WishlistRepositoryInterface extends BaseRepositoryInterface
{
    public function logicCreate($data = []);
}
