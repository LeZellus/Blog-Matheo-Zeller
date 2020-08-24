<?php

namespace App\src\DAO;

use App\config\Parameter;

class UserDAO extends DAO
{
    public function register(Parameter $post)
    {
        $sql = 'INSERT INTO user (pseudo, password, createdAt) VALUES (?, ?, NOW())';
        $this->createQuery($sql, [$post->get('pseudo'), $post->get('password')]);
    }
}