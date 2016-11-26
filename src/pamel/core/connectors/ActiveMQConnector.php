<?php

namespace pamel\core\connectors;


use pamel\api\core\connectors\MessageBrokerConnector;
use Stomp\Client;
use Stomp\SimpleStomp;

class ActiveMQConnector extends MessageBrokerConnector
{
    /**
     * @var Client
     */
    private $stompClient;
    /**
     * @var ActiveMQParameters
     */
    private $parameters;
    private $subscriptionId;

    /**
     * ActiveMQConnector constructor.
     * @param ActiveMQParameters $parameters
     */
    public function __construct(ActiveMQParameters $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @throws \Stomp\Exception\ConnectionException
     */
    public function connect()
    {
        $this->stompClient = new Client($this->parameters->getHost());
        $this->stompClient->connect();
    }


    public function disconnect()
    {
        if($this->hasClient()){
            $this->stompClient->disconnect();
        }
    }

    /**
     * @param $destination
     * @return null|SimpleStomp
     */
    public function subscribe($destination)
    {
        $stomp = null;
        if($this->hasClient()){
            $stomp = new SimpleStomp($this->stompClient);
            $this->subscriptionId = md5(date("Y-m-d H:m:s"));
            $stomp->subscribe($destination, $this->subscriptionId);

        }
        return $stomp;
    }

    /**
     * @param $destination
     * @return null|SimpleStomp
     */
    public function unSubscribe($destination)
    {
        $stomp = null;
        if($this->hasClient()){
            $stomp = new SimpleStomp($this->stompClient);
            $stomp->
            $stomp->unsubscribe($destination, $this->subscriptionId);
        }
        return $stomp;
    }

    private function hasClient(){
        if($this->stompClient != null && $this->stompClient instanceof Client){
            return true;
        }
        return false;
    }

}