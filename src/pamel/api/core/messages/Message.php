<?php

namespace pamel\api\core\messages;


abstract class Message
{
    protected $messageHeader;
    protected $messageBody;

    abstract public function getMessageHeader();

    abstract public function getMessageBody();

    abstract public function setMessageHeader(array $header);

    abstract public function setMessageBody($body);
}