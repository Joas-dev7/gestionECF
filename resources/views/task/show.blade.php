<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
    <h1>Details de la tache</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
        Tache numero: {{ $task->id }} / Title: {{ $task->title }} / Description: {{ $task->description }} / Statut:
        @if ($task->realise === 0)
            {{ "A faire" }}
        @else
            {{ "Termine" }}
        @endif
        / <a href="{{ route('task.edit', $task) }}">Modifier</a>
        / <a href="{{ route('task.destroy', $task) }}">Supprimer</a>
        <br>
</body>
</html>
</body>
</html>