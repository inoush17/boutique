<?php

namespace App\Interfaces;

interface AuthenticationInterface
{
    public function login(array $data);
    public function addUser($email, $name);

}
