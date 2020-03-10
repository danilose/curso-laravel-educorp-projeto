@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')

    <h3>Lista de Usuários - Qtde: {{count($users)}}</h3>

    <table class="table">

        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Quantidade alunos</td>
        </tr>
        
        @forelse($users as $user)
        
            <tr>
                
                <td> {{ $user->id }} </td>
                <td><a href="/users/{{ $user->id }}"> {{ $user->nome }} </a></td>
                <td> {{ $user->qtdAlunos }} </td>
                
            </tr>
        
        @empty
            Não há Usuários cadastrados
        @endforelse

    </table>

    {{ $users->links() }}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

