<?php

namespace Callmeaf\Log\App\Facades;

use Callmeaf\Log\App\Services\LogService;
use Illuminate\Support\Facades\Facade;

/**
 * @mixin LogService
 */
class LogFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return LogService::class;
    }
}
