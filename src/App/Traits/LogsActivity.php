<?php

namespace Callmeaf\Log\App\Traits;

use Spatie\Activitylog\LogOptions;

trait LogsActivity
{
    use \Spatie\Activitylog\Traits\LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable()->logOnlyDirty()->dontSubmitEmptyLogs()->useLogName(self::configKey())
            ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName}");
    }
}
