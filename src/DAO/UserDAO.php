<?php

namespace App\src\DAO;

use App\config\Parameter;

class UserDAO extends DAO
{
    public function register(Parameter $post)
    {
        $sql = 'INSERT INTO user (firstName, lastName, email, pseudo, password, createdAt) VALUES (?, ?, ?, ?, ?, NOW())';
        $this->createQuery($sql, [$post->get('firstname'), $post->get('lastname'), $post->get('email'), $post->get('pseudo'), password_hash($post->get('password'), PASSWORD_BCRYPT)]);
    }
}