@extends('adminlte::page')

@section('title', 'EWAP Panel administrador')

@section('content_header')
    <h1>EWAP Panel Administrador</h1>
    <p>Crear nuevo rol</p>
@stop

@section('content')
    <p>Bienvenido al panel de administracion de EWAP </p>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.roles.store']) !!}

            @include('admin.roles.partials.form')

            {!! Form::submit('Crear role', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>

@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}
