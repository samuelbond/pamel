<?php

namespace pamel\api\core;


interface BrokerHost
{
    /**
     * BrokerHost constructor.
     * @param $host
     */
    public function __construct($host);

    /**
     * Set host port
     * @param $port
     * @return mixed
     */
    public function setPort($port);

    /**
     * Get host port
     * @return mixed
     */
    public function getPort();

    /**
     * Get host
     * @return mixed
     */
    public function getHost();
}