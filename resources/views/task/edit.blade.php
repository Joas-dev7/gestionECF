{{-- @dd($task) --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Modifier une Tache</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="{{ route('task.update', $task) }}">
        @csrf
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" placeholder="{{$task->title}}"><br>
        <label for="description">Description</label><br>
        <input type="text" name="description" id="description" placeholder="{{$task->description}}"><br><br>
        <input type="text" hidden value="dzd">
        <input type="submit">

    </form>
</body>
</html>