<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Paciente;
use App\Models\User;
use Illuminate\Http\Request;


class soudohospital extends Controller
{
   
    function __construct()
    {
         $this->middleware('permission:unidadHosp-list|unidadHosp-create|unidadHosp-edit|unidadHosp-delete', ['only' => ['index','show']]);
         $this->middleware('permission:unidadHosp-create', ['only' => ['create','store']]);
         $this->middleware('permission:unidadHosp-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:unidadHosp-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
   
    {   
    
     return view('soudohospital.index');
    
    }

    
    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        
    }
    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
       
    }

    public function destroy($id)
    {
    
    }
}
