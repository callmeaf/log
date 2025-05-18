<?php

namespace Callmeaf\Log\App\Repo\Contracts;

use Callmeaf\Base\App\Repo\Contracts\BaseRepoInterface;
use Callmeaf\Log\App\Models\Log;
use Callmeaf\Log\App\Http\Resources\Api\V1\LogCollection;
use Callmeaf\Log\App\Http\Resources\Api\V1\LogResource;

/**
 * @extends BaseRepoInterface<Log,LogResource,LogCollection>
 */
interface LogRepoInterface extends BaseRepoInterface
{

}
