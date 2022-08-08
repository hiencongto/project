<?php
namespace App\Repositories\Repository;

use App\Models\Province;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\ProvinceRepositoryInterface;

class ProvinceRepository extends BaseRepository implements ProvinceRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Province::class;
    }

    public function logicCreate($data = [])
    {
        // TODO: Implement logicCreate() method.
    }
}

