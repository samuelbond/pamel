<?php

namespace pamel\core\util\activemq;


use pamel\core\connectors\ActiveMQConnector;
use pamel\core\connectors\ActiveMQParameters;
use pamel\core\PamelContext;

class ActiveMQPamelUtil
{
    /**
     * Create a new pamel context using an ActiveMQ connector
     * @param $host
     * @return PamelContext
     */
    public static function createPamelContext($host){
        $parameter = new ActiveMQParameters();
        $parameter->setHost($host);
        $connector = new ActiveMQConnector($parameter);
        $context = new PamelContext();
        $context->setMessageBrokerConnector($connector);
        return $context;
    }
}