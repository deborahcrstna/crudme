<!-- resources/views/tasks/edit.blade.php -->
<h1>Editar Tarefa</h1>

<form method="post" action="{{ route('tasks.update', $task->id) }}">
    @csrf
    @method('PUT')
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" value="{{ $task->title }}" required>
    <br>
    <label for="description">Descrição:</label>
    <textarea name="description" id="description">{{ $task->description }}</textarea>
    <br>
    <button type="submit">Salvar</button>
</form>

<a href="{{ route('tasks.index') }}">Voltar</a>
