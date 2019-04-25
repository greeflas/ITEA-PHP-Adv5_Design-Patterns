<?php

namespace App\Config;

use Symfony\Component\Yaml\Yaml;

class CountryConfig
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function getConfig()
    {
        $config = Yaml::parseFile($this->filePath);

        return $config;
    }
}
