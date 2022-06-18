<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\Code;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class CodeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    */
    public function model(array $row)
    {
        return new Code ([
            'd_codigo' => $row['d_codigo'],
            'd_asenta' => $row['d_asenta'],
            'd_tipo_asenta' => $row['d_tipo_asenta'],
            'D_mnpio' => $row['d_mnpio'],
            'd_estado' => $row['d_estado'],
            'd_ciudad' => $row['d_ciudad'],
            'd_CP' => $row['d_cp'],
            'c_estado' => $row['c_estado'],
            'c_oficina' => $row['c_oficina'],
            'c_tipo_asenta' => $row['c_tipo_asenta'],
            'c_mnpio' => $row['c_mnpio'],
            'id_asenta_cpcons' => $row['id_asenta_cpcons'],
            'd_zona' => $row['d_zona'],
            'c_cve_ciudad' => $row['c_cve_ciudad']
        ]);
    }
}
