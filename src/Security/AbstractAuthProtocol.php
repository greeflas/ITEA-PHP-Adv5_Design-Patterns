<?php

namespace App\Security;

abstract class AbstractAuthProtocol implements AuthProtocolInterface
{
    public function authenticate()
    {
        echo \sprintf("Auth protocol version %s\n", static::VERSION);
    }
}
