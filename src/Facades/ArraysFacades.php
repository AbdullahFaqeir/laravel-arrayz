<?php
/**
 * Created by PhpStorm.
 * User: AbdullahFaqeir
 * Date: 2/18/18
 * Time: 4:44 PM.
 */

namespace AlFaqeir\Arrayz\Facades;

use Illuminate\Support\Facades\Facade;

class Arrays extends Facade
{
    /**
     * Get the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Arrayz';
    }
}
