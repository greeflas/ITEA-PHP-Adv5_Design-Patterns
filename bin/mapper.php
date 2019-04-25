#!/usr/bin/env php
<?php

use App\Mapper\User;
use App\Mapper\UserMapper;

require_once __DIR__ . '/../vendor/autoload.php';

$mapper = new UserMapper();

$user = new User('tester@example.com');
var_dump($mapper->toArray($user));

$data = ['email' => 'second@example.com', 'status' => 3];
var_dump($mapper->toEntity($data));