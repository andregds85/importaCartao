<?php

namespace App\Imports;

use App\Models\Cns;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCns implements ToModel
{
    
    public function model(array $row)
    {
        return new Cns([
            'cns'  => $row[0],

        ]);
    }
}


