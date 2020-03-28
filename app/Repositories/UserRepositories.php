<?php

namespace App\Repositories;

use App\User;

class UserRepositories extends User
{
    public function getUserEmail($email)
    {
        $userEmail = $this->where('email', $email)->get();

        return $userEmail;
    }
}