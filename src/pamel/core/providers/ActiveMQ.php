<?php
/**
 * Created by PhpStorm.
 * User: bond
 * Date: 23/11/2016
 * Time: 22:26
 */

namespace pamel\core\providers;


use pamel\api\core\providers\Broker;
use pamel\core\messages\Exchange;
use pamel\core\messages\Message;

class ActiveMQ extends Broker
{
    public function retrieve() :Exchange
    {   /** @var \Stomp\Transport\Message $msg */
        $msg = $this->brokerResource->read();
        $exchange = new Exchange();
        $message = new Message();
        $message->setMessageBody($msg->body);
        $message->setMessageHeader($msg->getHeaders());
        $exchange->setMessage($message);
        $exchange->setOriginalMessage($msg);
        return $exchange;
    }

    public function send(Exchange $exchange) : Exchange
    {
        $this->brokerResource->send($this->endpoint, $exchange->getOut());
        return $exchange;
    }

    public function acknowledge(Exchange $exchange)
    {
        $this->brokerResource->ack($exchange->getOriginalMessage());
    }

}