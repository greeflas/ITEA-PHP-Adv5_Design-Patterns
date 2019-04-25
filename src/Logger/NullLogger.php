<?php

namespace App\Logger;

final class NullLogger implements LoggerInterface
{
    public function log($message)
    {
        // do nothing
    }
}
