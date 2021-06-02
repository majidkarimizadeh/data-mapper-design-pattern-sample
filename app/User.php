<?php

namespace App;

class User
{
    function __construct(private int $id, private string $email) {}

    public function getId() : int
    {
        return $this->id;
    }

    public function getEmail() : string
    {
        return $this->email;
    }
}
