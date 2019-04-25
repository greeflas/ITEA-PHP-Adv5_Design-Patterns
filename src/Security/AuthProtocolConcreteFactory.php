<?php

namespace App\Security;

final class AuthProtocolConcreteFactory
{
    public function createProtocolV1()
    {
        return new AuthProtocolV1();
    }

    public function createProtocolV2()
    {
        return new AuthProtocolV2();
    }
}
