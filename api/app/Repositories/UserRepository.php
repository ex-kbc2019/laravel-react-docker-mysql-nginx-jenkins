<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * get user by params
     *
     * @param array $params
     * @return User
     */
    public function findUserByParams(array $params): User
    {
        return User::where($params[0], $params[1])->first();
    }
}
