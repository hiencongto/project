<?php

namespace App\Repositories\Repository;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\OrderDetailRepositoryInterface;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\App;


class OrderDetailRepository extends BaseRepository implements OrderDetailRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return OrderDetail::class;
    }

    public function logicCreate($data = [])
    {
        // TODO: Implement logicCreate() method.
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function detail($id)
    {
        $orderDetails = $this->model->where('order_id', $id)->get();

        return $orderDetails;
    }

    /**
     * @param $product_id
     *
     * @return mixed
     */
    public function deleteByProductId($product_id)
    {
        if (! $this->model->where('product_id', $product_id)->get()->toArray()) {
            return true;
        }

        return $this->model->where('product_id', $product_id)->delete();
    }
}


