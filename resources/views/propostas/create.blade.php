@extends('adminlte::page')

@section('title', 'Criar Proposta')

@section('content_header')
    <h1>Criar Proposta</h1>
@stop

@section('content')
    <div class="row">
        <form action="/propostas" method="post">
            @csrf

            <div class="form-group">
                <label for="titulo">Título:</label>
                <input class="form-control" type="text" name="titulo">
            </div>

            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input class="form-control" type="text" name="tipo">
            </div>

            <div class="form-group">
                <label for="user_id">Usuário:</label>
                <input class="form-control" type="text" name="user_id">
            </div>
            
            <button type="submit" class="btn btn-success">Criar Proposta</button>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

