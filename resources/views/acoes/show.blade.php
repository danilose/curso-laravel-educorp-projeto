@extends('adminlte::page')

@section('title', 'Detalhes da Ação de Extensão')

@section('content_header')
    <form action="/acoes/{{$acao->id}}" method="POST">
        @method('DELETE')
        @csrf
        <h1>
            Detalhes da Ação de Extensão "{{$acao->nome}}"
            <a href="/acoes/{{$acao->id}}/edit" class="btn btn-primary">Editar Ação de Extensão</a>
            <button type="submit" class="btn btn-danger">Apagar Ação de Extensão</button>
            <a href="/acoes" class="btn btn-info">Voltar</a>
        </h1>
    </form>
@stop

@section('content')

    <div class="row">
        <div class="col-12"><strong>Código </strong> {{$acao->id}}</div>
        <div class="col-12"><strong>Nome </strong> {{$acao->nome}}</div>
        <div class="col-12"><strong>Quantidade alunos </strong> {{$acao->qtdAlunos}}</div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

