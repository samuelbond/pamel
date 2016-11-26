<?php

namespace pamel\core;


class RouterRunner
{
    /**
     * @var Pamel
     */
    private $route;

    /**
     * RouterRunner constructor.
     * @param Pamel $route
     */
    public function __construct(Pamel $route)
    {
        $this->route = $route;
    }

    public function run(){
        $running = true;

        do{
            $this->route->configure();
        }while($running);
    }


}