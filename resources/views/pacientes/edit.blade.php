@extends('layouts3.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar paciente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Voltar</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Teve algum problema com sua entrada <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('macros.update',$macro->id) }}" method="POST">
    	@csrf
        @method('PUT')

                 
            <div class="row">  
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
		            <strong>Nome</strong>
		            <input type="text" name="nome" value="{{ $macro->nome }}" class="form-control" placeholder="Nome do Usuário">
		        </div>
		    </div>
            </div>

    
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Atualizar</button>
		    </div>
		</div>


    </form>


<p class="text-center text-primary"><small>Macro</small></p>
@endsection
