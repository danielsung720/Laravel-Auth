<?php

namespace App\Service;

use App\Repositories\UserRepositories;

class UserService
{
    private $userRepositories;
    public function __construct(UserRepositories $userRepositories)
    {
        $this->userRepositories = $userRepositories;
    }

    public function verifyRegistration($email)
    {
        $data = $this->userRepositories->getUserEmail($email);

        if(count($data) === 0) {
            return '未註冊';
        } else {
            return '已註冊';
        }
    }
}