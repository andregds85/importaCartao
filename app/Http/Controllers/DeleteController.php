<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
  
    function __construct()
    {
         $this->middleware('permission:categoria-list|categoria-create|categoria-edit|categoria-delete', ['only' => ['index','show']]);
         $this->middleware('permission:categoria-create', ['only' => ['create','store']]);
         $this->middleware('permission:categoria-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:categoria-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        return('delete.index');
    }

    public function codigo()
    {
        return('delete.codigo');
    }


       
}

