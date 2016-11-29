<?php
/**
 * Created by PhpStorm.
 * User: bond
 * Date: 23/11/2016
 * Time: 22:26
 */

namespace pamel\core\providers;


use pamel\api\core\PamelRouter;
use pamel\api\core\processors\Processor;
use pamel\core\messages\Exchange;
use pamel\core\messages\Message;
use pamel\core\PamelContext;
use pamel\core\Source;
use pamel\core\util\SourceUtil;
use pamel\exception\InvalidOrEmptySourceException;
use Stomp\SimpleStomp;

class ActiveMQ implements PamelRouter
{
    /**
     * @var PamelContext
     */
    private $pamelContext;
    /**
     * @var Exchange
     */
    private $exchange;
    /**
     * @var Source
     */
    private $source;
    /**
     * @var SimpleStomp
     */
    private $resource;

    /**
     * ActiveMQ constructor.
     * @param PamelContext $context
     * @param Source $source
     */
    public function __construct(PamelContext $context, Source $source)
    {
        $this->pamelContext = $context;
        $this->source = $source;
        if(SourceUtil::isEmpty($source)){
            throw new InvalidOrEmptySourceException();
        }
        $this->pamelContext->getMessageBrokerConnector()->connect();
        $this->resource = $this->pamelContext->getMessageBrokerConnector()->subscribe($this->source->getEndpoint());
    }

    public function configure()
    {
        // TODO: Implement configure() method.
    }

    public function from()
    {
        /** @var \Stomp\Transport\Message $msg */
        $msg = $this->resource->read();
        $this->exchange = new Exchange();
        $message = new Message();
        $message->setMessageBody($msg->body);
        $message->setMessageHeader($msg->getHeaders());
        $this->exchange->setMessage($message);
        $this->exchange->setOriginalMessage($msg);
        return $this;
    }

    public function to(Source $source = null)
    {
        if(SourceUtil::isNotEmpty($source)){
            $this->resource->send($source->getEndpoint(), $this->exchange->getOut());
        }
        return $this;
    }

    public function process(Processor $processor)
    {
        if($processor != null){
            $processor->process($this->exchange);
        }
        return $this;
    }

    public function log($item)
    {
        // TODO: Implement log() method.
    }

}