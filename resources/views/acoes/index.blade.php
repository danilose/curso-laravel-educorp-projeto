@extends('adminlte::page')

@section('title', 'Ações de Extensão')

@section('content_header')
    <h1>Ações de Extensão</h1>
@stop

@section('content')

    <h3>Lista de Ações de Extensão - Qtde: {{count($acoes)}}</h3>

    <table>

        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Quantidade alunos</td>
        </tr>
        
        @forelse($acoes as $acao)
        
            <tr>
                
                <td> {{ $acoa->id }} </td>
                <td><a href="/acoes/{{ $acoa->id }}"> {{ $acoa->nome }} </a></td>
                <td> {{ $acoa->qtdAlunos }} </td>
                
            </tr>
        
        @empty
            Não há ações
        @endforelse

    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

