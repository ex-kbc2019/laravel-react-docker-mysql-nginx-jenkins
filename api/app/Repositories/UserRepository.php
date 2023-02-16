<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * get user by email
     *
     * @param string $email
     * @return User
     */
    public function getUserByEmail(string $email): User
    {
        return User::where("email", $email)->first();
    }
}
