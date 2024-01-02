<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> {{$izena}} editatu</h2>

    <form action="/update">
        @csrf
        <input type="text" name="nombre" id="nombre" value="{{$izena}}" >
        <input type="text" name="apellido" id="apellido" value="{{$abizena}}" >
        <input type="hidden" name="id" id="id" value="{{$id}}">
        <input type="submit" value="Editatu">
    </form>
</body>
</html>