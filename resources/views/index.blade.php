<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>

    <section>
        <h1>Tarefas</h1>
    </section>
    <section>
        <a href="{{ route('create') }}" target="_blank" rel="noopener noreferrer">Criar nova tarefa</a>
       
    </section>
    
    <section>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Status</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->name}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->status}}</td>
                    <td> <a href="{{ route('get') }}" target="_blank" rel="noopener noreferrer">Atualizar tarefa</a></td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    </section>
</body>
</html>