<?php

namespace pamel\api\core\messages;


use pamel\core\messages\Message;

abstract class Exchange
{
    protected $out;
    /**
     * @var Message
     */
    protected $message;
    protected $originalMessage;

    abstract public function getMessage();
    abstract public function getOriginalMessage();
    abstract public function setMessage(Message $message);
    abstract public function setOriginalMessage($originalMessage);
    abstract public function setOut($message);
    abstract public function getOut();
}