<?php
namespace App\Repositories\Repository;

use App\Models\District;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\DistrictRepositoryInterface;

class DistrictRepository extends BaseRepository implements DistrictRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return District::class;
    }

    public function logicCreate($data = [])
    {
        // TODO: Implement logicCreate() method.
    }
}
