<?php

namespace pamel\core\providers;

use pamel\api\core\providers\Broker;
use pamel\core\messages\Exchange;

class SQS extends Broker
{
    function retrieve() :Exchange
    {
        // TODO: Implement retrieve() method.
    }

    function send(Exchange $exchange) : Exchange
    {
        // TODO: Implement send() method.
    }

}