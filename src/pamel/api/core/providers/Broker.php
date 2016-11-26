<?php

namespace pamel\api\core\providers;

use pamel\core\messages\Exchange;

abstract class Broker
{
    protected $endpoint;
    protected $brokerResource;

    /**
     * Retrieves message from broker
     * @return Exchange
     */
    abstract function retrieve() :Exchange;

    /**
     * Sends message to broker
     * @param Exchange $exchange
     * @return Exchange
     */
    abstract function send(Exchange $exchange) : Exchange;

    /**
     * Acknowledge message receipt
     * @return void
     */
    abstract function acknowledge(Exchange $exchange);

    /**
     * Broker constructor.
     * @param $endpoint
     */
    public function __construct($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @param mixed $brokerResource
     */
    public function setBrokerResource($brokerResource)
    {
        $this->brokerResource = $brokerResource;
    }

    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }
}