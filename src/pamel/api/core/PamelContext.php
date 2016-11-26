<?php

namespace pamel\api\core;


use pamel\api\core\connectors\Connector;
use pamel\api\core\connectors\MessageBrokerConnector;

interface PamelContext
{
    public function setConnector(Connector $connector);

    public function getConnector() :Connector;

    public function setMessageBrokerConnector(MessageBrokerConnector $brokerConnector);

    public function getMessageBrokerConnector();
}