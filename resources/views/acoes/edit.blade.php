@extends('adminlte::page')

@section('title', 'Editar detalhes da Ação de Extensão')

@section('content_header')
    <h1>Editar detalhes da Ação de Extensão "{{ $acao->nome }}"</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="/acoes/{{ $acao->id }}" method="POST">
                @CSRF
                @method('PATCH')
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $acao->nome }}">
                </p>
                
                <p>
                    <label for="qtdAlunos">Quantidade alunos:</label>
                    <input type="text" name="qtdAlunos" value="{{ $acao->qtdAlunos }}">
                </p>
                
                <button type="submit" class="btn btn-primary">Editar Ação de Extensão</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
