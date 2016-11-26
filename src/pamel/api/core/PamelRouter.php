<?php

namespace pamel\api\core;


use pamel\api\core\processors\Processor;
use pamel\api\core\providers\Broker;

interface PamelRouter
{
    /**
     * Configures a route
     * @return void
     */
    public function configure();

    /**
     * Listens to broker
     * @param Broker $broker
     * @return $this
     */
    public function from(Broker $broker);

    /**
     * Sends to broker
     * @param Broker $broker
     * @return $this
     */
    public function to(Broker $broker);

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