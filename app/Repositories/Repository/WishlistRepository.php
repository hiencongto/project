<?php

namespace App\Repositories\Repository;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\WishlistRepositoryInterface;
use App\Models\Wishlist;


class WishlistRepository extends BaseRepository implements WishlistRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Wishlist::class;
    }

    public function logicCreate($data = [])
    {
        // TODO: Implement logicCreate() method.
    }

    //check xem san pham da co trong wishlist chua
    /**
     * @param $user_id
     *
     * @param $product_id
     *
     * @return mixed
     */
    public function checkWishlist($user_id, $product_id)
    {
        return $this->model->where('user_id', $user_id)->where('product_id', $product_id)->first();
    }


    /**
     * @param $user_id
     *
     * @return mixed
     */
    public function findWishlistByUserId($user_id)
    {
        return $this ->model->where('user_id', $user_id)->get();
    }

    public function deleteByProductId($product_id)
    {
        if (! $this->model->where('product_id', $product_id)->get()->toArray()) {
            return true;
        }

        return $this->model->where('product_id', $product_id)->delete();
    }
}

