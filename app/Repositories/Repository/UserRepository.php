<?php

namespace App\Repositories\Repository;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\UserRepositoryInterface;
use App\Models\User;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return User::class;
    }

    public function logicCreate($data = [])
    {
        // TODO: Implement logicCreate() method.
    }

    public function findUserByEmail($email)
    {
        return $this->model->where('email', $email)->get();
    }

    public function updateStatusByEmail($email)
    {
        return $this->model->where('email', $email)
            ->update(['status' => 1]);
    }
}
