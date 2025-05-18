<?php

namespace Callmeaf\Log\App\Traits;

use Callmeaf\Log\App\Http\Middleware\LogJobActivity;

trait InteractsWithLogJobActivity
{
    public function middleware(): array
    {
        return [new LogJobActivity];
    }

    public function logName(): string
    {
        return 'jobs';
    }

    public function logDesc(): string
    {
        $jobClass = get_class($this);
        return "{$jobClass} has been executed";
    }

    public function logEvent(): string
    {
        return 'dispatch';
    }
}
