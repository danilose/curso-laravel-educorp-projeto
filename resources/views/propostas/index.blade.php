@extends('adminlte::page')

@section('title', 'Propostas')

@section('content_header')
    <h1>Propostas</h1>
@stop

@section('content')

    <h3>Lista de Propostas - Qtde: {{count($propostas)}}</h3>

    <table class="table">

        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Quantidade alunos</td>
        </tr>
        
        @forelse($propostas as $proposta)
        
            <tr>
                
                <td> {{ $proposta->id }} </td>
                <td><a href="/propostas/{{ $proposta->id }}"> {{ $proposta->nome }} </a></td>
                <td> {{ $proposta->qtdAlunos }} </td>
                
            </tr>
        
        @empty
            Não há Propostas cadastradas
        @endforelse

    </table>

    {{ $propostas->links() }}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

