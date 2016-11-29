<?php
/**
 * Created by PhpStorm.
 * User: amazis01
 * Date: 29/11/2016
 * Time: 14:12
 */

namespace pamel\api\core;


interface Source
{
    /**
     * Source constructor.
     * @param $endpoint
     */
    public function __construct($endpoint);

    /**
     * Returns the endpoint
     * @return mixed
     */
    public function getEndpoint();
}