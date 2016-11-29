<?php

namespace pamel\core;


class BrokerHost implements \pamel\api\core\BrokerHost
{
    private $host;
    private $port;

    public function __construct($host)
    {
        $this->host = $host;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function getHost()
    {
        return $this->host;
    }

}