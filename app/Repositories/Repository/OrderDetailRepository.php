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

    public function detail($id)
    {
        $orderDetails = $this->model->where('order_id', $id)->get();

        return $orderDetails;
    }
}


