<?php

namespace App\Mapper;

final class UserMapper
{
    public function toEntity(array $data)
    {
        if (!isset($data['email'])) {
            throw new \DomainException('Email is required');
        }

        $user = new User($data['email']);

        if (isset($data['username'])) {
            $user->setUsername($data['username']);
        }

        return $user;
    }

    /**
     * @param User $user
     */
    public function toArray($user)
    {
        return [
            'email' => $user->getEmail(),
            'username' => $user->getUsername(),
        ];
    }
}
