<?php

namespace App\Logger;

final class StdoutLogger implements LoggerInterface
{
    public function log($message)
    {
        echo $message . \PHP_EOL;
    }
}
