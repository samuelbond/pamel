<?php

namespace pamel\core;


use pamel\api\core\processors\Processor;
use pamel\core\util\BrokerFactory;
use pamel\core\util\PamelContextFactory;

class Route
{
    /**
     * @var BrokerHost
     */
    protected $brokerHost;
    /**
     * @var int
     */
    protected $brokerType;
    /**
     * @var ReadFrom
     */
    protected $from;
    /**
     * @var SendTo
     */
    protected $to;
    /**
     * @var Processor
     */
    protected $processor;

    /**
     * Route constructor.
     * @param BrokerHost $brokerHost
     * @param int $brokerType
     * @param ReadFrom $from
     * @param SendTo $to
     * @param Processor $processor
     */
    public function __construct(BrokerHost $brokerHost, $brokerType, ReadFrom $from, SendTo $to = null, Processor $processor)
    {
        $this->brokerHost = $brokerHost;
        $this->brokerType = $brokerType;
        $this->from = $from;
        $this->to = $to;
        $this->processor = $processor;
    }


    public function configure(){
//        $pamelContext = PamelContextFactory::getContext($this->brokerType, $this->brokerHost);
//        $broker = BrokerFactory::getBroker($this->brokerType, $pamelContext, $this->from);
//        $broker->from()->process($this->processor)->to($this->to);
    }


}