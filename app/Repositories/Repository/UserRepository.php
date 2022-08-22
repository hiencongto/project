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

    /**
     * @param $email
     *
     * @return mixed
     */
    public function findUserByEmail($email)
    {
        return $this->model->where('email', $email)->get();
    }

    /**
     * @param $email
     *
     * @return mixed
     */
    public function updateStatusByEmail($email)
    {
        return $this->model->where('email', $email)
            ->update(['status' => 1]);
    }

    /**
     * @param $email
     *
     * @return mixed
     */
    public function checkStatusUser($email)
    {
        return $this->model->where('email', $email)->get();
    }

    /**
     * @param $email
     *
     * @return mixed
     */
    public function checkRoleUser($email)
    {
        return $this->model->where('email', $email)->get()->toArray();
    }

    /**
     * @param $email
     *
     * @return mixed
     */
    public function checkExistEmail($email)
    {
        return $this->model->where('email', $email)->get()->toArray();
    }

    public function changePasswordByEmail($email, $password)
    {
        return $this->model->where('email', $email)->update(['password' => bcrypt($password)]);
    }
}
