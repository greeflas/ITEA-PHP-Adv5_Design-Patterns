#!/usr/bin/env php
<?php

use App\Config\CachedCountryConfig;
use App\Config\CountryConfig;
use Symfony\Component\Yaml\Yaml;

require_once __DIR__ . '/../vendor/autoload.php';

$uaConfigFile = dirname(__DIR__) . '/config/ua.yaml';

$config = new CountryConfig($uaConfigFile);
$uaConfig = $config->getConfig();
var_dump($uaConfig);

$cachedConfig = new CachedCountryConfig($uaConfigFile);
var_dump($cachedConfig->getConfig());

$uaConfig['currency'] = 'UAH';
$updatedConfig = Yaml::dump($uaConfig);
\file_put_contents($uaConfigFile, $updatedConfig);

var_dump($config->getConfig());
var_dump($cachedConfig->getConfig());
