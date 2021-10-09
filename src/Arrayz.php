<?php
/**
 * Created by PhpStorm.
 * User: AbdullahFaqeir
 * Date: 2/18/18
 * Time: 4:50 PM.
 */

namespace AlFaqeir\Arrayz;

if (0 === strpos(PHP_VERSION, '7')) {
    require __DIR__.'/classes/arrayz-php7.php';
} elseif (0 === strpos(PHP_VERSION, '5')) {
    require __DIR__.'/classes/arrayz-php5.php';
}

class Arrayz extends \Arrayz
{
    /**
     * @param array $array
     *
     * @return Arrayz
     */
    public static function load(array $array)
    {
        return new self($array);
    }
}
