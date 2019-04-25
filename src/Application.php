<?php

namespace App;

use App\Logger\LoggerInterface;

final class Application
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run()
    {
        $this->logger->log('Application is started.');

        // TODO: implement application run logic
    }
}
