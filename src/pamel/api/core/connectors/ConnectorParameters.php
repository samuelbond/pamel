<?php
/**
 * Created by PhpStorm.
 * User: bond
 * Date: 24/11/2016
 * Time: 10:34
 */

namespace pamel\api\core\connectors;


abstract class ConnectorParameters
{
    protected $host;

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }


}