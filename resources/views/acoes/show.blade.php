@extends('adminlte::page')

@section('title', 'Detalhes da Ação de Extensão')

@section('content_header')
    <h1>Detalhes da Ação de Extensão "{{$sala->nome}}"</h1>
@stop

@section('content')
    <div class="row">
        <p><strong>Código </strong> {{$sala->id}}</p>
        <p><strong>Nome </strong> {{$sala->nome}}</p>
        <p><strong>Quantidade alunos </strong> {{$sala->qtdAlunos}}</p>
    </div>

    <a href="/salas">Voltar</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

