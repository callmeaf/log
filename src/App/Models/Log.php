<?php

namespace Callmeaf\Log\App\Models;

use Callmeaf\Base\App\Models\BaseLogModel;
use Callmeaf\Base\App\Traits\Model\HasDate;

class Log extends BaseLogModel
{
    use HasDate;
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
