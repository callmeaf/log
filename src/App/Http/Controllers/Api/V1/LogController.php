<?php

namespace Callmeaf\Log\App\Http\Controllers\Api\V1;

use Callmeaf\Base\App\Http\Controllers\Api\V1\ApiController;
use Callmeaf\Log\App\Repo\Contracts\LogRepoInterface;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class LogController extends ApiController implements HasMiddleware
{
    public function __construct(protected LogRepoInterface $logRepo)
    {
        parent::__construct($this->logRepo->config);
    }

    public static function middleware(): array
    {
        return [
           //
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->logRepo->latest()->search()->paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return $this->logRepo->create(data: $this->request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->logRepo->findById(value: $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        return $this->logRepo->update(id: $id, data: $this->request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->logRepo->delete(id: $id);
    }

    public function statusUpdate(string $id)
    {
        return $this->logRepo->update(id: $id, data: $this->request->validated());
    }

    public function typeUpdate(string $id)
    {
        return $this->logRepo->update(id: $id, data: $this->request->validated());
    }

    public function trashed()
    {
        return $this->logRepo->trashed()->latest()->search()->paginate();
    }

    public function restore(string $id)
    {
        return $this->logRepo->restore(id: $id);
    }

    public function forceDestroy(string $id)
    {
        return $this->logRepo->forceDelete(id: $id);
    }
}
