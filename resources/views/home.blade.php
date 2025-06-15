@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingreso</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ingreso Correctamente!
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="{{ url('/gestion') }}">Pagina Principal</a>
                </div>
                <br>
            </div>
        </div>
    </div>
   
@endsection
