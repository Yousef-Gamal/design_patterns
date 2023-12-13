<?php

namespace structural\DataMapper;

class StorageManager
{
    public function __construct(private array $data){}

    public function find(int $id): array
    {
        return $this->data[$id];
    }
    public function save(array $user): bool
    {
        $this->data[] = $user;
        return true;
    }
}