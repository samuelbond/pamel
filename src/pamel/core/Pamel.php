<?php

namespace pamel\core;


use pamel\api\core\PamelRouter;
use pamel\api\core\processors\Processor;
use pamel\api\core\providers\Broker;
use pamel\core\messages\Exchange;

abstract class Pamel implements PamelRouter
{
    /**
     * @var PamelContext
     */
    private $pamelContext;
    /**
     * @var Exchange
     */
    private $exchange;

    /**
     * Pamel constructor.
     * @param PamelContext $pamelContext
     */
    public function __construct(PamelContext $pamelContext)
    {
        $this->pamelContext = $pamelContext;
    }

    public function from(Broker $broker)
    {
        $this->pamelContext->getMessageBrokerConnector()->connect();
        $resource = $this->pamelContext->getMessageBrokerConnector()->subscribe($broker->getEndpoint());
        $broker->setBrokerResource($resource);
        $this->exchange = $broker->retrieve();
        return $this;
    }

    public function to(Broker $broker)
    {
        $this->pamelContext->getMessageBrokerConnector()->connect();
        $resource = $this->pamelContext->getMessageBrokerConnector()->subscribe($broker->getEndpoint());
        $broker->setBrokerResource($resource);
        $this->exchange = $broker->send($this->exchange);
        return $this;
    }

    public function process(Processor $processor)
    {
        $processor->process($this->exchange);
        return $this;
    }

    public function log($item)
    {
        echo "{$item}";
        return $this;
    }


}