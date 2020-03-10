@extends('adminlte::page')

@section('title', 'Detalhes do Edital')

@section('content_header')
    <form action="/editais/{{$edital->id}}" method="POST">
        @method('DELETE')
        @csrf
        <h1>
            Detalhes do Edital "{{$edital->nome}}"
            <a href="/editais/{{$edital->id}}/edit" class="btn btn-primary">Editar Edital</a>
            <button type="submit" class="btn btn-danger">Apagar Edital</button>
            <a href="/editais" class="btn btn-info">Voltar</a>
        </h1>
    </form>
@stop

@section('content')

    <div class="row">
        <div class="col-12"><strong>Código </strong> {{$edital->id}}</div>
        <div class="col-12"><strong>Nome </strong> {{$edital->nome}}</div>
        <div class="col-12"><strong>Quantidade alunos </strong> {{$edital->qtdAlunos}}</div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

