<?php

namespace App\Security;

use App\Security\Exception\UnknownAuthProtocolException;

final class AuthProtocolFactory
{
    public static function create($version)
    {
        switch ($version) {
            case AuthProtocolV1::VERSION:
                return new AuthProtocolV1();

            case AuthProtocolV2::VERSION:
                return new AuthProtocolV2();
        }

        throw new UnknownAuthProtocolException(
            \sprintf('Unknown protocol version "%s"', $version)
        );
    }
}
