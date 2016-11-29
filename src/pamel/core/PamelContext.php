<?php

namespace pamel\core;

use pamel\api\core\connectors\Connector;
use pamel\api\core\connectors\MessageBrokerConnector;

class PamelContext implements \pamel\api\core\PamelContext
{
    private $connector;

    private $messageBrokerConnector;

    public function setConnector(Connector $connector)
    {
        $this->connector = $connector;
    }

    public function getConnector() :Connector
    {
        return $this->connector;
    }

    public function setMessageBrokerConnector(MessageBrokerConnector $brokerConnector)
    {
        $this->messageBrokerConnector = $brokerConnector;
    }

    public function getMessageBrokerConnector(): MessageBrokerConnector
    {
        return $this->messageBrokerConnector;
    }


}