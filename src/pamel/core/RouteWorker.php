<?php
/**
 * Created by PhpStorm.
 * User: amazis01
 * Date: 29/11/2016
 * Time: 15:52
 */

namespace pamel\core;


class RouteWorker extends \Worker
{
    protected $loaderPath;

    /**
     * RouteWorker constructor.
     * @param $loaderPath
     */
    public function __construct($loaderPath)
    {
        $this->loaderPath = $loaderPath;
    }

    public function run(){
        require_once $this->loaderPath.DIRECTORY_SEPARATOR."vendor/autoload.php";
    }

    /* override default inheritance behaviour for the new threaded context */
    public function start(int $options = PTHREADS_INHERIT_ALL) {
        return parent::start(PTHREADS_INHERIT_NONE);
    }
}