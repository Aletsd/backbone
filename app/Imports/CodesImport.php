<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;

class CodesImport implements WithMultipleSheets, SkipsUnknownSheets
{
    /**
    * @param Collection $collection
    */
    public function sheets(): array
    {
        return [
            'Aguascalientes' => new CodeImport(),
            'Baja_California' => new CodeImport(),
            'Baja_California_Sur' => new CodeImport(),
        ];
    }

    public function onUnknownSheet($sheetName)
    {
        // E.g. you can log that a sheet was not found.
        info("Sheet {$sheetName} was skipped");
    }
}
