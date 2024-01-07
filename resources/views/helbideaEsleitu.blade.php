<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e5e5e5;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
        }

        li {
            display: inline-block;
            margin-right: 10px;
        }

        a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        

    </style>
</head>
<body>
    <header>
        <ul>
            <li><a href="/">Erabiltzailea gehitu</a></li>
            <li><a href="/helbidea">Helbideak</a></li>
            <li><a href="/post">POST-ak</a></li>
            <li><a href="/api/posts/recent">Azken post-ak</a></li>
        </ul>
    </header>
    <h1>Helbidea Esleitu</h1>
    <br>
    <br>

    <form action="/esleitu">
        <select name="helbidea" id="helbidea">
            @foreach($helbideak as $helbidea)
                <option value="{{$helbidea->id}}">{{$helbidea->direccion}}</option>
            @endforeach
        </select>

        <select name="usuario" id="usuario">
            @foreach($usuarios as $user)
                <option value="{{$user->id}}">{{$user->izena}}</option>
            @endforeach
        </select>

        <input type="submit" value="Esleitu">
    </form>

    <table>
    @foreach($usuarios as $user)
        <tr>
            <td>{{$user->izena}}</td>
            <td>
                @if($user->direccion)
                    {{$user->direccion->direccion}}
                @else
                    No address assigned
                @endif
            </td>
        </tr>
    @endforeach
</table>



</body>
</html>