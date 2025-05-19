<?php

use Callmeaf\Base\App\Enums\RequestType;

return [
    'model' => \Callmeaf\Log\App\Models\Log::class,
    'route_key_name' => 'id',
    'repo' => \Callmeaf\Log\App\Repo\V1\LogRepo::class,
    'resources' => [
        RequestType::API->value => [
            'resource' => \Callmeaf\Log\App\Http\Resources\Api\V1\LogResource::class,
            'resource_collection' => \Callmeaf\Log\App\Http\Resources\Api\V1\LogCollection::class,
        ],
        RequestType::WEB->value => [
            'resource' => \Callmeaf\Log\App\Http\Resources\Web\V1\LogResource::class,
            'resource_collection' => \Callmeaf\Log\App\Http\Resources\Web\V1\LogCollection::class,
        ],
        RequestType::ADMIN->value => [
            'resource' => \Callmeaf\Log\App\Http\Resources\Admin\V1\LogResource::class,
            'resource_collection' => \Callmeaf\Log\App\Http\Resources\Admin\V1\LogCollection::class,
        ],
    ],
    'events' => [
        RequestType::API->value => [
            \Callmeaf\Log\App\Events\Api\V1\LogIndexed::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Api\V1\LogCreated::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Api\V1\LogShowed::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Api\V1\LogUpdated::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Api\V1\LogDeleted::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Api\V1\LogStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Api\V1\LogTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::WEB->value => [
            \Callmeaf\Log\App\Events\Web\V1\LogIndexed::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Web\V1\LogCreated::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Web\V1\LogShowed::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Web\V1\LogUpdated::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Web\V1\LogDeleted::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Web\V1\LogStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Web\V1\LogTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::ADMIN->value => [
            \Callmeaf\Log\App\Events\Admin\V1\LogIndexed::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Admin\V1\LogCreated::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Admin\V1\LogShowed::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Admin\V1\LogUpdated::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Admin\V1\LogDeleted::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Admin\V1\LogStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Log\App\Events\Admin\V1\LogTypeUpdated::class => [
                // listeners
            ],
        ],
    ],
    'requests' => [
        RequestType::API->value => [
            'index' => \Callmeaf\Log\App\Http\Requests\Api\V1\LogIndexRequest::class,
            'store' => \Callmeaf\Log\App\Http\Requests\Api\V1\LogStoreRequest::class,
            'show' => \Callmeaf\Log\App\Http\Requests\Api\V1\LogShowRequest::class,
            'update' => \Callmeaf\Log\App\Http\Requests\Api\V1\LogUpdateRequest::class,
            'destroy' => \Callmeaf\Log\App\Http\Requests\Api\V1\LogDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Log\App\Http\Requests\Api\V1\LogStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Log\App\Http\Requests\Api\V1\LogTypeUpdateRequest::class,
        ],
        RequestType::WEB->value => [
            'index' => \Callmeaf\Log\App\Http\Requests\Web\V1\LogIndexRequest::class,
            'create' => \Callmeaf\Log\App\Http\Requests\Web\V1\LogCreateRequest::class,
            'store' => \Callmeaf\Log\App\Http\Requests\Web\V1\LogStoreRequest::class,
            'show' => \Callmeaf\Log\App\Http\Requests\Web\V1\LogShowRequest::class,
            'edit' => \Callmeaf\Log\App\Http\Requests\Web\V1\LogEditRequest::class,
            'update' => \Callmeaf\Log\App\Http\Requests\Web\V1\LogUpdateRequest::class,
            'destroy' => \Callmeaf\Log\App\Http\Requests\Web\V1\LogDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Log\App\Http\Requests\Web\V1\LogStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Log\App\Http\Requests\Web\V1\LogTypeUpdateRequest::class,
        ],
        RequestType::ADMIN->value => [
            'index' => \Callmeaf\Log\App\Http\Requests\Admin\V1\LogIndexRequest::class,
            'store' => \Callmeaf\Log\App\Http\Requests\Admin\V1\LogStoreRequest::class,
            'show' => \Callmeaf\Log\App\Http\Requests\Admin\V1\LogShowRequest::class,
            'update' => \Callmeaf\Log\App\Http\Requests\Admin\V1\LogUpdateRequest::class,
            'destroy' => \Callmeaf\Log\App\Http\Requests\Admin\V1\LogDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Log\App\Http\Requests\Admin\V1\LogStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Log\App\Http\Requests\Admin\V1\LogTypeUpdateRequest::class,
        ],
    ],
    'controllers' => [
        RequestType::API->value => [
            'log' => \Callmeaf\Log\App\Http\Controllers\Api\V1\LogController::class,
        ],
        RequestType::WEB->value => [
            'log' => \Callmeaf\Log\App\Http\Controllers\Web\V1\LogController::class,
        ],
        RequestType::ADMIN->value => [
            'log' => \Callmeaf\Log\App\Http\Controllers\Admin\V1\LogController::class,
        ],
    ],
    'routes' => [
        RequestType::API->value => [
            'prefix' => 'logs',
            'as' => 'logs.',
            'middleware' => [
                'route_status:' . \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND,
            ],
        ],
        RequestType::WEB->value => [
            'prefix' => 'logs',
            'as' => 'logs.',
            'middleware' => [
                'route_status:' . \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND,
            ],
        ],
        RequestType::ADMIN->value => [
            'prefix' => 'logs',
            'as' => 'logs.',
            'middleware' => [
                'auth:sanctum',
                'role:' . \Callmeaf\Role\App\Enums\RoleName::SUPER_ADMIN->value,
            ],
        ],
    ],
    'enums' => [
         'status' => \Callmeaf\Log\App\Enums\LogStatus::class,
         'type' => \Callmeaf\Log\App\Enums\LogType::class,
    ],
     'exports' => [
        RequestType::API->value => [
            'excel' => \Callmeaf\Log\App\Exports\Api\V1\LogsExport::class,
        ],
        RequestType::WEB->value => [
            'excel' => \Callmeaf\Log\App\Exports\Web\V1\LogsExport::class,
        ],
        RequestType::ADMIN->value => [
            'excel' => \Callmeaf\Log\App\Exports\Admin\V1\LogsExport::class,
        ],
     ],
     'imports' => [
         RequestType::API->value => [
             'excel' => \Callmeaf\Log\App\Imports\Api\V1\LogsImport::class,
         ],
         RequestType::WEB->value => [
             'excel' => \Callmeaf\Log\App\Imports\Web\V1\LogsImport::class,
         ],
         RequestType::ADMIN->value => [
             'excel' => \Callmeaf\Log\App\Imports\Admin\V1\LogsImport::class,
         ],
     ],
    'facades' => [
        [
            'alias' => 'LoggerAct',
            'service' => \Callmeaf\Log\App\Services\LogService::class,
            'facade' => \Callmeaf\Log\App\Facades\LogFacade::class,
        ],
    ],
];
