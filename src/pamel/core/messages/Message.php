<?php

namespace pamel\core\messages;
use \pamel\api\core\messages\Message as ApiMessage;

class Message extends ApiMessage
{
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    public function getMessageBody()
    {
        return $this->messageBody;
    }

    public function setMessageHeader(array $header)
    {
        $this->messageHeader = $header;
    }

    public function setMessageBody($body)
    {
        $this->messageBody = $body;
    }


}