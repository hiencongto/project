<?php
namespace App\Repositories\Repository;

use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\ProductRepositoryInterface;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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

    public function searchName(string $name)
    {
        $products = $this->model->where('name', 'like', '%'.$name.'%')->get();

        return $products;
    }

    public function searchProduct($request)
    {
        $query = $this->model;
        if ($request->brand_id){
            $query = $query->where('brand_id', $request->brand_id);
        }
        if ($request->category_id){
            $query = $query->where('category_id', $request->category_id);
        }
        $query = $query->where( 'price', '>=', $request->price_min);
        $query = $query->where( 'price', '<=', $request->price_max);


        return $query->get();
    }
}
