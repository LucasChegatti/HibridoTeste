<?php

namespace Hibrido\CustomLogIp\Logger\Handler;

class Customer extends \Magento\Framework\Logger\Handler\Base
{
    protected $loggerType = \Monolog\Logger::INFO;

    public function __construct(
        \Magento\Framework\Filesystem\DriverInterface $filesystem,
        $filePath = null,
        $fileName = null
    ) {
        $fileName = '/var/log/debug.log';
        parent::__construct($filesystem, $filePath, $fileName);
    }
}
