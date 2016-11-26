<?php
/**
 * Created by PhpStorm.
 * User: bond
 * Date: 23/11/2016
 * Time: 22:37
 */

namespace pamel\core\messages;
use pamel\api\core\messages\Exchange as ApiExchange;

class Exchange extends ApiExchange
{
    public function getMessage()
    {
        return $this->message;
    }

    public function getOriginalMessage()
    {
        return $this->originalMessage;
    }

    public function setMessage(Message $message)
    {
        $this->message = $message;
    }

    public function setOriginalMessage($originalMessage)
    {
        $this->originalMessage = $originalMessage;
    }

    public function setOut($message)
    {
        $this->out = $message;
    }

    public function getOut()
    {
        return $this->out;
    }

}