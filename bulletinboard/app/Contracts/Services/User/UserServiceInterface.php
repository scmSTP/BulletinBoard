<?php

namespace App\Contracts\Services\User;

interface UserServiceInterface
{
    public function getuser();
    public function store($auth_id, $post);
    public function profile($auth_id);
    public function edit($auth_id);
}
