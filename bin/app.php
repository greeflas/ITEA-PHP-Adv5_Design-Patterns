#!/usr/bin/env php
<?php

use App\Application;
use App\Logger\NullLogger;
use App\Logger\StdoutLogger;

require_once __DIR__ . '/../vendor/autoload.php';

$logger = new StdoutLogger();
$logger = new NullLogger();

$app = new Application($logger);
$app->run();
