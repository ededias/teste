<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova tarefa</title>
</head>
<body>
    <section>
        <h1>Criar tarefa</h1>
    </section>
   <section>
        <form action="{{ route('save') }}" method="post">
            {{ method_field('POST') }}
            {{ csrf_field() }}
            <div>
                <label for="">nome</label>
                <input name="name" id="name" type="text">
            </div>
            <div>
                <label for="">descriçãoo</label>
                <input  name="description" id="description" type="text">
            </div>
            <div>
                <label for="status">status</label>
                <select name="status" id="status">
                    <option value="1">Concluido</option>
                    <option value="2">Andamento</option>
                </select>
            </div>
            <input type="submit" value="salvar">
        </form>
   </section>
</body>
</html>