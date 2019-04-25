#!/usr/bin/env php
<?php

use App\Mapper\User;
use App\UserCollection;

require_once __DIR__ . '/../vendor/autoload.php';

$users = [
    new User('u1'),
    new User('u2'),
    new User('u3'),
    new User('u4'),
];

$collection = new UserCollection(...$users);

foreach ($collection as $user) {
    var_dump($user->getEmail());
}
