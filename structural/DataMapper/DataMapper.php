<?php

namespace structural\DataMapper;

class DataMapper
{
    public function __construct(private StorageManager $manager){}

    public function findById(int $id): array
    {
        return $this->manager->find($id);
    }
    public function saveUser(User $user): bool
    {
        $userData = [
            $user->getId() => [
                'username' => $user->getUsername(),
                'password' => $user->getPassword()
            ]
        ];
        return $this->manager->save($userData);
    }
}