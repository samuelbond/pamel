<?php

namespace pamel\api\core;


use pamel\api\core\processors\Processor;
use pamel\api\core\providers\Broker;
use pamel\core\PamelContext;
use pamel\core\Source;

interface PamelRouter
{
    /**
     * PamelRouter constructor.
     * @param PamelContext $context
     * @param Source $source
     */
    public function __construct(PamelContext $context, Source $source);

    /**
     * Configures a route
     * @return void
     */
    public function configure();

    /**
     * Listens to broker
     * @return $this
     */
    public function from();

    /**
     * Sends to broker
     * @param Source $source
     * @return $this
     */
    public function to(Source $source);

    /**
     * Processes a Processor
     * @param Processor $processor
     * @return $this
     */
    public function process(Processor $processor);

    /**
     * Logs item
     * @param $item
     * @return $this
     */
    public function log($item);
}