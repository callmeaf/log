<?php

use Callmeaf\Log\App\Enums\LogStatus;
use Callmeaf\Log\App\Enums\LogType;

return [
    LogStatus::class => [
        LogStatus::ACTIVE->name => 'Active',
        LogStatus::INACTIVE->name => 'InActive',
        LogStatus::PENDING->name => 'Pending',
    ],
    LogType::class => [
        //
    ],
];
