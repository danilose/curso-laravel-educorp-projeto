@extends('adminlte::page')

@section('title', 'Editais')

@section('content_header')
    <h1>Editais</h1>
@stop

@section('content')

    <h3>Lista de Editais - Qtde: {{count($editais)}}</h3>

    <table class="table">

        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Quantidade alunos</td>
        </tr>
        
        @forelse($editais as $edital)
        
            <tr>
                
                <td> {{ $edital->id }} </td>
                <td><a href="/editais/{{ $edital->id }}"> {{ $edital->nome }} </a></td>
                <td> {{ $edital->qtdAlunos }} </td>
                
            </tr>
        
        @empty
            Não há Editais cadastrados
        @endforelse

    </table>

    {{ $editais->links() }}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

