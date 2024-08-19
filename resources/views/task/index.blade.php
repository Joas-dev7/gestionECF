{{-- @dd($tasks) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Liste des taches</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    @foreach ($tasks as $task)
        
        Tache numero: {{ $task->id }} / Title: {{ $task->title }}
        / <a href="{{ route('task.show', $task) }}">Plus de details</a>
        / <a href="{{ route('task.edit', $task) }}">Modifier</a>
        / <a href="{{ route('task.destroy', $task) }}">Supprimer</a>
        <br>
    @endforeach
</body>
</html>