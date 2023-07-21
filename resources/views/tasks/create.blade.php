<h1>Adicionar Tarefa</h1>

<form method="post" action="{{ route('tasks.store') }}">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="description">Descrição:</label>
    <textarea name="description" id="description"></textarea>
    <br>
    <button type="submit">Salvar</button>
</form>

<a href="{{ route('tasks.index') }}">Voltar</a>
