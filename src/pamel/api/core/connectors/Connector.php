<?php

namespace pamel\api\core\connectors;


interface Connector
{
    /**
     * Connects to resource
     * @return mixed
     */
    public function connect();

    /**
     * Disconnects from resource
     * @return mixed
     */
    public function disconnect();
}