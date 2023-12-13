<?php

use \structural\DataMapper\StorageManager;
class DataMapperTest extends \PHPUnit\Framework\TestCase
{
    private StorageManager $manager;
    private array $data;
    public function setUp(): void
    {
        $this->data = [1 => ['username' => 'Yousef','password' => '123456']];
        $this->manager = new StorageManager($this->data);
    }

    public function testCanGetUserById()
    {
        $dataMapper = new \structural\DataMapper\DataMapper($this->manager);
        $user = $dataMapper->findById(1);
        $this->assertEquals($this->data[1],$user);
    }
    public function testCanSaveUser()
    {
        $user = new \structural\DataMapper\User();
        $user->setUsername("Yousef");
        $user->setPassword("123");
        $user->setId(2);

        $dataMapper = new \structural\DataMapper\DataMapper($this->manager);
        $this->assertTrue($dataMapper->saveUser($user));
    }
}