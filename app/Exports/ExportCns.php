<?php

namespace App\Exports;

use App\Models\Cns;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportCns implements FromCollection
{
  
    public function collection()
    {
        return Cns::all();
    }
}