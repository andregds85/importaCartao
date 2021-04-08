<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportCns;
use App\Imports\ImportCns;
use Maatwebsite\Excel\Facades\Excel;


class Import_Export_Controller extends Controller
{
    function __construct()
    {
         $this->middleware('permission:arquivo-list|arquivo-create|arquivo-edit|arquivo-delete', ['only' => ['index','store']]);
         $this->middleware('permission:arquivo-create', ['only' => ['create','store']]);
         $this->middleware('permission:arquivo-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:arquivo-delete', ['only' => ['destroy']]);
    }

    public function importExport()
    {
       return view('import');
    }

    public function export()
    {
        return Excel::download(new ExportCns, 'Cns.xlsx');
    }

    public function import()
    {
        Excel::import(new ImportCns, request()->file('file'));

        return back();
    }
}
