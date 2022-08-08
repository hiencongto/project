<?php
namespace App\Repositories\Repository;

use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Category::class;
    }

    public function logicCreate($data = [])
    {
        // TODO: Implement logicCreate() method.
    }
}
