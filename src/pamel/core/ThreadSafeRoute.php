<?php
/**
 * Created by PhpStorm.
 * User: amazis01
 * Date: 29/11/2016
 * Time: 16:46
 */

namespace pamel\core;


use pamel\api\core\processors\Processor;
use pamel\core\messages\Exchange;
use pamel\core\providers\config\Broker;


class ThreadSafeRoute extends \Thread
{
    public function run(){
        $host = new BrokerHost("");
        $readFrom = new ReadFrom("/queue/sample");
        $processor = new class implements Processor{
            public function process(Exchange $exchange)
            {
                echo "I got {$exchange->getMessage()->getMessageBody()}";
            }
        };
        (new Route($host, Broker::ACTIVEMQ, $readFrom, new SendTo("k"), $processor))->configure();
    }

}