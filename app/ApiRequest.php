<?php

namespace App;

class ApiRequest
{
    function __construct(private string $base_url) {}

    public function get(string $path) : array
    {
        $data_string = file_get_contents($this->base_url . $path);
        $data_array  = json_decode($data_string, true);
        return $data_array;
    }
}
