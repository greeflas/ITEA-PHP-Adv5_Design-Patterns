#!/usr/bin/env php
<?php

use App\SqlQueryBuilder;

require_once __DIR__ . '/../vendor/autoload.php';

$builder = new SqlQueryBuilder();
$builder->select('username');
$builder->from('user');
$builder->where('status = 1');
$sql = $builder->getQuery();

var_dump($sql);

$builder = new SqlQueryBuilder();
$builder->from('profile');
$sql = $builder->getQuery();

var_dump($sql);
