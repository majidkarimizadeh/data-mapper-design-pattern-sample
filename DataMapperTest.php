<?php

require_once __DIR__ . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class DataMapperTest extends TestCase
{
    public function test_data_mapper_fun() : void
    {
        $api_request = new App\ApiRequest('https://jsonplaceholder.typicode.com');
        $mapper = new App\UserMapper($api_request);
        $user = $mapper->findById(3);
        $this->assertSame($user->getId(), 3);
        $this->assertSame($user->getEmail(), 'Nathan@yesenia.net');
    }
}
