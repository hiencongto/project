<?php

namespace App\Repositories\Repository;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\BrandRepositoryInterface;
use App\Models\Brand;


class BrandRepository extends BaseRepository implements BrandRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Brand::class;
    }

    public function logicCreate($data = [])
    {
        // TODO: Implement logicCreate() method.
    }
}

