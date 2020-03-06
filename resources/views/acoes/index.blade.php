<div class="row">
    <div class="col-12">
        <h1>Ações de Extensão</h1>
        <p><a href="acoes/create">Adicionar nova ação</a></p>
    </div>
</div>

<h3>Lista de ações - {{count($acoes)}}</h3>

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