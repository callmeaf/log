<?php

namespace Callmeaf\Log\App\Models;

use Callmeaf\Base\App\Models\BaseLogModel;
use Callmeaf\Base\App\Traits\Model\HasDate;
use Callmeaf\Base\App\Traits\Model\HasSearch;

class Log extends BaseLogModel
{
    use HasDate,HasSearch;
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

    public function searchParams(): array
    {
        return [
            [
                'subject_id' => 'subject_id',
                'subject_type' => 'subject_type',
                'causer_id' => 'causer_id',
                'causer_type' => 'causer_type',
                'event' => 'event',
                'log_name' => 'log_name',
            ],
            [
                'created_from' => 'created_at',
                'created_to' => 'created_at',
            ]
        ];
    }
}
