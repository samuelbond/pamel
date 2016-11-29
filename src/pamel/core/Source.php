<?php
/**
 * Created by PhpStorm.
 * User: amazis01
 * Date: 29/11/2016
 * Time: 14:14
 */

namespace pamel\core;


class Source implements \pamel\api\core\Source
{
    private $endpoint;

    public function __construct($endpoint)
    {
        $this->endpoint  = $endpoint;
    }

    public function getEndpoint()
    {
        return $this->endpoint;
    }

}