@extends('adminlte::page')

@section('title', 'Criar Ação de Extensão')

@section('content_header')
    <h1>Criar Ação de Extensão</h1>
@stop

@section('content')
    <div class="row">
        <form action="/acoes" method="post">
            @csrf

            <p>
                <label for="titulo">Título:</label>
                <input type="text" name="titulo">
            </p>

            <p>
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo">
            </p>

            <p>
                <label for="user_id">Usuário:</label>
                <input type="text" name="user_id">
            </p>
            
            <button type="submit">Criar Ação de Extensão</button>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

