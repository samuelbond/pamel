<?php
/**
 * Created by PhpStorm.
 * User: bond
 * Date: 23/11/2016
 * Time: 22:40
 */

namespace pamel\api\core\processors;


use pamel\core\messages\Exchange;

interface Processor
{
    public function process(Exchange $exchange);
}