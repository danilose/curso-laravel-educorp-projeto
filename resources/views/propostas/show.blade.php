@extends('adminlte::page')

@section('title', 'Detalhes da Proposta')

@section('content_header')
    <form action="/propostas/{{$proposta->id}}" method="POST">
        @method('DELETE')
        @csrf
        <h1>
            Detalhes da sala "{{$proposta->nome}}"
            <a href="/propostas/{{$proposta->id}}/edit" class="btn btn-primary">Editar Proposta</a>
            <button type="submit" class="btn btn-danger">Apagar Proposta</button>
            <a href="/propostas" class="btn btn-info">Voltar</a>
        </h1>
    </form>
@stop

@section('content')

    <div class="row">
        <div class="col-12"><strong>Código </strong> {{$proposta->id}}</div>
        <div class="col-12"><strong>Nome </strong> {{$proposta->nome}}</div>
        <div class="col-12"><strong>Quantidade alunos </strong> {{$proposta->qtdAlunos}}</div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

