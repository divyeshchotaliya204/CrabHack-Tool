<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public $user = [];

    public function __construct()
    {
    }

    public function create($user)
    {
        $this->user = User::create($user);
        return $this;
    }

    public function getAllUsers()
    {
        return User::all();
    }
}
