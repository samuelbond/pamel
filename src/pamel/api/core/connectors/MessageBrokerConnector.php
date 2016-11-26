<?php

namespace pamel\api\core\connectors;


abstract class MessageBrokerConnector implements  Connector
{
    protected $resource;
    /**
     * Subscribe to message channel
     * @param $destination
     * @return mixed
     */
    abstract public function subscribe($destination);

    /**
     * Unsubscribe from message channel
     * @param $destination
     * @return mixed
     */
    public function unSubscribe($destination){
    }
}