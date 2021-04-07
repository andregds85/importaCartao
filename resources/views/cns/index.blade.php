@extends('layouts4.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Macros</h2>
            </div>
            <div class="pull-right">
                @can('cns-create')
                <a class="btn btn-success" href="{{ route('cns.create') }}"> Nova Macro</a>
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
            <th>id</th>
            <th>cns</th>
        </tr>
	    @foreach ($cns as $cn)
	    <tr>
           <td>{{ $cn->id }}</td>
           <td>{{ $cn->cns }}</td>
        </tr>
	    @endforeach
    </table>




    {!! $cns->links() !!}
        {!! $cns->links() !!}


<p class="text-center text-primary"><small>Macro</small></p>
@endsection
