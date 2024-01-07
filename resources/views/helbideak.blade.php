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
    <h1>HELBIDEAK</h1>

    <form action="/helbidea/berria">
        <input type="submit" value="Helbidea sartu">
    </form>

    <form action="/helbidea/esleitu">
        <input type="submit" value="Helbidea esleitu">
    </form>
    <br>
    <br>
    <br>
    <table>
        @foreach($registro as $direccion)
            <tr>
                <td>{{$direccion->id}}</td>
                <td>{{$direccion->direccion}}</td>
                <td>
                    <form action="/helbidea/editatu">
                        <input type="hidden" name="helbidea" id="helbidea" value="{{$direccion->direccion}}">
                        <input type="hidden" name="id" id="id" value="{{$direccion->id}}">
                        <input type="submit" value="Editatu">
                    </form>
                </td>

                <td>
                    <form action="/helbidea/ezabatu/{{$direccion->id}}">
                        <input type="submit" value="Ezabatu">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>