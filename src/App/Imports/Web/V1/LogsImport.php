<?php

namespace Callmeaf\Log\App\Imports\Web\V1;

use Callmeaf\Base\App\Services\Importer;
use Callmeaf\Log\App\Enums\LogStatus;
use Callmeaf\Log\App\Repo\Contracts\LogRepoInterface;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class LogsImport extends Importer implements ToCollection,WithChunkReading,WithStartRow,SkipsEmptyRows,WithValidation,WithHeadingRow
{
    private LogRepoInterface $logRepo;

    public function __construct()
    {
        $this->logRepo = app(LogRepoInterface::class);
    }

    public function collection(Collection $collection)
    {
        $this->total = $collection->count();

        foreach ($collection as $row) {
            $this->logRepo->freshQuery()->create([
                // 'status' => $row['status'],
            ]);
            ++$this->success;
        }
    }

    public function chunkSize(): int
    {
        return \Base::config('import_chunk_size');
    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        $table = $this->logRepo->getTable();
        return [
            // 'status' => ['required',Rule::enum(LogStatus::class)],
        ];
    }

}
