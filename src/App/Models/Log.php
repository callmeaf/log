<?php

namespace Callmeaf\Log\App\Models;

use Callmeaf\Base\App\Models\BaseLogModel;

class Log extends BaseLogModel
{
    protected $table = 'activity_log';

    public static function configKey(): string
    {
        return 'callmeaf-log';
    }

    protected function casts(): array
    {
        return [
            ...(self::config()['enums'] ?? []),
        ];
    }
}
