<?php

namespace App\Config;

final class CachedCountryConfig extends CountryConfig
{
    private $cache;

    public function reset()
    {
        $this->cache = null;
    }

    public function getConfig()
    {
        if (null === $this->cache) {
            $this->cache = parent::getConfig();
        }

        return $this->cache;
    }
}
