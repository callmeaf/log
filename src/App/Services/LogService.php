<?php

namespace Callmeaf\Log\App\Services;

use Spatie\Activitylog\ActivityLogger;

class LogService
{
    /**
     * @param object $job
     * @param Closure(ActivityLogger $log): void  $closure
     * @return \Spatie\Activitylog\Contracts\Activity|null
     */
    public function forJob(object $job,\Closure $closure)
    {
        $jobClass = get_class($job);
        $activity = activity('jobs')->event('dispatch');
        /**
         * @var ActivityLogger $activity
         */
        $activity = $closure($activity);

        return $activity->log("{$jobClass} has been executed.");
    }
}
