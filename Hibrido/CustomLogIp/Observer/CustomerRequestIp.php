<?php

namespace Hibrido\CustomLogIp\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CustomerRequestIp implements ObserverInterface
{
    protected $_request;

    public function __construct(
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->_request = $request;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $ipRequest = $observer->getEvent()->getRequest(); 
        $this->loggerCustomer->info('request: ' . $ipRequest . ' SUCCESS');
    }
}
