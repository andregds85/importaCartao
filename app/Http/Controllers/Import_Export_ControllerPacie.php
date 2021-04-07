<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportPacie;
use App\Imports\ImportPacie;
use Maatwebsite\Excel\Facades\Excel;


class Import_Export_ControllerPacie extends Controller
{

    function __construct()
    {
         $this->middleware('permission:arquivo-list|arquivo-create|pacientes-edit|arquivo-delete', ['only' => ['index','show']]);
         $this->middleware('permission:arquivo-create', ['only' => ['create','store']]);
         $this->middleware('permission:arquivo-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:arquivo-delete', ['only' => ['destroy']]);
    }




    public function importExport()
    {
       return view('importPaciente');
    }
    public function export()
    {
        return Excel::download(new ExportPacie, 'Pacientes.xlsx');
    }

    public function import()
    {
        Excel::import(new ImportPacie, request()->file('file'));

        return back();

    }


    public function id($id){
        return  $id;
    }


}




