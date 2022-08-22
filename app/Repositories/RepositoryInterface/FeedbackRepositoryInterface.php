<?php
namespace App\Repositories\RepositoryInterface;

use App\Repositories\BaseRepositoryInterface;

interface FeedbackRepositoryInterface extends BaseRepositoryInterface
{
    public function logicCreate($data = []);
}

