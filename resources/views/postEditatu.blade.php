<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .area{
            width: 100%;
        }
    </style>
</head>
<body>
    
<h2>Editatu</h2>

    <form action="/post/update">
        @csrf

        <textarea type="text" name="descripcion" id="descripcion" cols="30" rows="10">{{$descripcion}} </textarea>

        <input type="hidden" name="id" id="id" value="{{$id}}">
        <input type="submit" value="Editatu">
    </form>
</body>
</html>