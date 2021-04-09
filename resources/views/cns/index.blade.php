@extends('layouts4.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CNS</h2>
            </div>


        </div>
    </div>

    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Apagar</h2>
        </div>
        <p class="card-text">
        <a class="nav-link" href="{{ url('') }}">Apagar Dados</a>
       </p>
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
