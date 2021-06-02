<?php

namespace App;

class UserMapper
{

    function __construct(private ApiRequest $api) {}
    
    public function findById(string $id) : User
    {
        $user_array = $this->api->get("/users/{$id}");
        return new User($user_array['id'], $user_array['email']);
    }
}
