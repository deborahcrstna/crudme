<h1>Lista de Tarefas</h1>

<a href="{{ route('tasks.create') }}">Adicionar Tarefa</a>

<ul>
    @foreach($tasks as $task)
        <li>
            {{ $task->title }}
            <a href="{{ route('tasks.edit', $task->id) }}">Editar</a>
            <form method="post" action="{{ route('tasks.destroy', $task->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </li>
    @endforeach
</ul>
