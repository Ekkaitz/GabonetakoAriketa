<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> {{$helbidea}} editatu</h2>

    <form action="/helbidea/update">
        @csrf
        <input type="text" name="helbidea" id="helbidea" value="{{$helbidea}}" >
        <input type="hidden" name="id" id="id" value="{{$id}}">
        <input type="submit" value="Editatu">
    </form>
</body>
</html>