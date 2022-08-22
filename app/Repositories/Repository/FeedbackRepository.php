<?php

namespace App\Repositories\Repository;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\FeedbackRepositoryInterface;
use App\Models\Feedback;


        class FeedbackRepository extends BaseRepository implements FeedbackRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Feedback::class;
    }

    public function logicCreate($data = [])
    {
        // TODO: Implement logicCreate() method.
    }

            /**
             * @param $product_id
             *
             * @return bool
             */
    public function deleteByProductId($product_id)
    {
        if (! $this->model->where('product_id', $product_id)->get()->toArray()) {
            return true;
        }

        return $this->model->where('product_id', $product_id)->delete();
    }
}

