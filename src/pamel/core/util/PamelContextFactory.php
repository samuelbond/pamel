<?php

namespace pamel\core\util;
use pamel\core\BrokerHost;
use \pamel\core\providers\config\Broker;
use pamel\core\util\activemq\ActiveMQPamelUtil;

class PamelContextFactory
{
    public static function getContext($brokerType, BrokerHost $host){
        $context = null;
        switch ($brokerType){
            case Broker::ACTIVEMQ:
                $context = ActiveMQPamelUtil::createPamelContext($host->getHost());
                break;
            default:
                break;
        }
        return $context;
    }
}