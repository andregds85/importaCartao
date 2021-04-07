<?php

namespace App\Http\Controllers;
use App\Models\mapas;
use Illuminate\Http\Request;

class MapasController extends Controller
{
  
    function __construct()
    {
         $this->middleware('permission:unidadHosp-list|unidadHosp-create|unidadHosp-edit|unidadHosp-delete', ['only' => ['index','show']]);
         $this->middleware('permission:unidadHosp-create', ['only' => ['create','store']]);
         $this->middleware('permission:unidadHosp-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:unidadHosp-delete', ['only' => ['destroy']]);
    }



    public function index()
    {
         $mapas = mapas::orderby('id', 'asc')->paginate();
         return view('mapas.index',compact('mapas'));
    }

    public function create()
    {
        return view('mapas.create');
    }

     public function store(Request $request)
    {
        request()->validate([
            'categorias_id' => 'required',
            'nome' => 'required',
            'descricao' => 'required',
            'especialidade' => 'required',
            'cod_procedimento' => 'required',
            'procedimento' =>'required',
            'vagas' => 'required',
          ]);

        mapas::create($request->all());
        return redirect()->route('mapas.index')
                        ->with('Sucesso','Paciente Criado com Sucesso.');
    }

    public function show(mapas $mapa)
    {
        return view('mapas.show',compact('mapa'));
    }

    public function edit(mapas $mapa)
    {
        return view('mapas.edit',compact('mapa'));
    }
   
    public function update(Request $request, mapas $mapa)
    {
        request()->validate([
            'categorias_id' => 'required',
            'nome' => 'required',
            'descricao' => 'required',
            'especialidade' => 'required',
            'cod_procedimento' => 'required',
            'procedimento' =>'required',
            'vagas' => 'required',
          ]);

        $mapa->update($request->all());
        return redirect()->route('mapas.index')
                        ->with('Sucesso','Mapa Atualizado com Sucesso');
    }

 
    
    public function destroy(mapas $mapa)
    {
        $mapa->delete();
        return redirect()->route('mapas.index')
                        ->with('Sucesso','Mapa Deletado com Sucesso');
    }
}
