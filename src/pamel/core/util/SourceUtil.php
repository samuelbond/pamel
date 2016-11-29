<?php
/**
 * Created by PhpStorm.
 * User: amazis01
 * Date: 29/11/2016
 * Time: 15:24
 */

namespace pamel\core\util;


use pamel\core\Source;

class SourceUtil
{
    public static function isNotEmpty(Source $source = null) :bool {
        if($source != null && $source instanceof Source){
            if($source->getEndpoint() != null){
                return true;
            }
        }
        return false;
    }

    public static function isEmpty(Source $source = null) :bool {
        return !(self::isNotEmpty($source));
    }
}