<?php

namespace App\Service;

use App\Models\User;

class UserService
{
    public function getUsers()
    {
        return User::all();
    }
}