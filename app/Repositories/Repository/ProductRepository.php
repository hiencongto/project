<?php
namespace App\Repositories\Repository;

use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Product::class;
    }

    public function logicCreate($data = [])
    {
        // TODO: Implement logicCreate() method.
    }
}
