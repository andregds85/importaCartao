<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cns;


class CnsController extends Controller
{
   
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','show']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
 

    public function index()
    {
       
    $cns = Cns::orderby('id', 'asc')->paginate();
    return view('cns.index',compact('cns'));
    }
    

    public function create()
    {
        return view('cns.cadastrar');
    }

    public function store(Request $request)
    {
        request()->validate([
            'cns' => 'required',
        ]);

        Macro::create($request->all());

        return redirect()->route('cns.index')
                        ->with('Sucesso','cns criada com  Sucesso.');
    }
      public function show()
    {

    }
    public function edit(Macro $cns)
    {
        return view('cns.editar',compact('cns'));
    }

    public function update(Request $request, Cns $cns)
    {
         request()->validate([
            'cns' => 'required',
        ]);

        $cns->update($request->all());

        return redirect()->route('cns.index')
                        ->with('Sucesso','Cns Atualizada com Sucesso');
    }

    public function destroy(Cns $cns)
    {
        $cns->delete();
        return redirect()->route('cns.index')
                        ->with('Sucesso','cns deletada com Sucesso');
    }


}
