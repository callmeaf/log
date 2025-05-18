<?php

namespace Callmeaf\Log\App\Http\Middleware;

use Callmeaf\Log\App\Http\Middleware\Contracts\HasLogJobActivity;
use Closure;

class LogJobActivity
{
    /**
     * Process the queued job.
     * @param HasLogJobActivity $job
     * @param Closure(object): void  $next
     */
    public function handle(HasLogJobActivity $job, Closure $next)
    {
        $next($job);

        activity(
            $job->logName(),
        )->performedOn(
            $job->logPerformedOn(),
        )->causedBy(
            $job->logCauserBy(),
        )->event(
            $job->logEvent()
        )->withProperties(
            [
                'job_type' => get_class($job),
                ...$job->logPayload(),
            ],
        )->log(
            $job->logDesc()
        );
    }
}
