<?php
namespace App\Repositories\RepositoryInterface;

use App\Repositories\BaseRepositoryInterface;

interface ChapterRepositoryInterface extends BaseRepositoryInterface
{
    public function logicCreate($data = []);
}

