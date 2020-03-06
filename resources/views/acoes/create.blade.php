<div class="row">
    <h1>Adicionar Ação de Extensão</h1>
</div>

<hr>

<div class="row">
    <form action="/acoes" method="post">
        @csrf

        <p>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo">
        </p>

        <p>
            <label for="tipo">Tipo:</label>
            <input type="text" name="tipo">
        </p>

        <p>
            <label for="user_id">Usuário:</label>
            <input type="text" name="user_id">
        </p>
        
        <button type="submit">Criar Ação de Extensão</button>
    </form>
</div>
