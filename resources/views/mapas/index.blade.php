@extends('layouts2.app')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mapas</h2>
            </div>
            <div class="pull-right">
                @can('categoria-create')
                <a class="btn btn-success" href="{{ route('mapas.create') }}"> Novo Mapa</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Status</th>
            <th>id</th>
            <th>nome</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($mapas as $mapa)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $mapa->id }}</td>
	        <td>{{ $mapa->nome }}</td>

	    </tr>
	    @endforeach
    </table>


<p class="text-center text-primary"><small>Mapas</small></p>
@endsection




