@extends('adminlte::page')

@section('title', 'Detalhes da Usuário')

@section('content_header')
    <form action="/users/{{$user->id}}" method="POST">
        @method('DELETE')
        @csrf
        <h1>
            Detalhes da sala "{{$user->nome}}"
            <a href="/users/{{$user->id}}/edit" class="btn btn-primary">Editar Usuário</a>
            <button type="submit" class="btn btn-danger">Apagar Usuário</button>
            <a href="/users" class="btn btn-info">Voltar</a>
        </h1>
    </form>
@stop

@section('content')

    <div class="row">
        <div class="col-12"><strong>Código </strong> {{$user->id}}</div>
        <div class="col-12"><strong>Nome </strong> {{$user->nome}}</div>
        <div class="col-12"><strong>Quantidade alunos </strong> {{$user->qtdAlunos}}</div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

