@extends('layouts4.app')
@section('content')

<div class="container">
	<h6>Exporta CNS EXCEL</h6>
	<form action="{{ url('import') }}" method="POST" name="importform"
	  enctype="multipart/form-data">
		@csrf

		<div class="form-group">
			<a class="btn btn-info" href="{{ url('export') }}">Exportar Arquivo</a>
		</div>
	</form>
</div>
<br>



<div class="container">
<h6>Importa CNS EXCEL</h6>

	<form action={{url('ImportCns') }} method="POST" name="importform"
	  enctype="multipart/form-data">
		@csrf
        <div class="form-group">
			<label for="file">File:</label>
			<input id="file" type="file" name="file" class="form-control">
		</div>
        <button class="btn btn-success">Importar Arquivo</button>
    </form>
</div>




@endsection
