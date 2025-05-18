<?php

namespace Callmeaf\Log\App\Http\Middleware\Contracts;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

interface HasLogJobActivity
{
    public function middleware(): array;
    public function logPerformedOn(): Model;
    public function logCauserBy(): User;
    public function logName(): string;
    public function logDesc(): string;
    public function logPayload(): array;
    public function logEvent(): string;
}
