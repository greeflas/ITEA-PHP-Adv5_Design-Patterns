#!/usr/bin/env php
<?php

use App\Security\AuthProtocolFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$v1 = AuthProtocolFactory::create('AUTH-V1');
$v1->authenticate();

$v2 = AuthProtocolFactory::create('AUTH-PROTOCOL-V2');
$v2->authenticate();

AuthProtocolFactory::create('Undefinded');
