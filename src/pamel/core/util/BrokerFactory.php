<?php
namespace pamel\core\util;
use pamel\core\providers\ActiveMQ;
use \pamel\core\providers\config\Broker;
class BrokerFactory
{
    /**
     * @param $type
     * @param $context
     * @param $readSource
     * @return null|ActiveMQ
     */
    public static function getBroker($type, $context, $readSource){
        $broker = null;
        switch ($type){
            case Broker::AWS_SNS:
                break;
            case Broker::ACTIVEMQ:
                $broker = new ActiveMQ($context, $readSource);
                break;
            default:
                break;
        }
        return $broker;
    }
}