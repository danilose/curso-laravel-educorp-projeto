@extends('adminlte::page')

@section('title', 'Ações de Extensão')

@section('content_header')
    <h1>Ações de Extensão</h1>
@stop

@section('content')

    <h3>Lista de Ações de Extensão - Qtde: {{count($acoes)}}</h3>

    <table class="table">

        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Quantidade alunos</td>
        </tr>
        
        @forelse($acoes as $acao)
        
            <tr>
                
                <td> {{ $acao->id }} </td>
                <td><a href="/acoes/{{ $acao->id }}"> {{ $acao->nome }} </a></td>
                <td> {{ $acao->qtdAlunos }} </td>
                
            </tr>
        
        @empty
            Não há Ações de Extensão cadastradas
        @endforelse

    </table>

    {{ $acoes->links() }}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

