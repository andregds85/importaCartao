@extends('layouts4.app')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <?php
    use App\Models\Cns;
    $tabela = cns::all();
?>

<?php $tabela = Cns::truncate(); ?>









<p class="text-center text-primary"><small>Hospital</small></p>
@endsection
