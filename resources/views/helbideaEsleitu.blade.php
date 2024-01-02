<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilo para la tabla */
        table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        }

        /* Estilo para las celdas de encabezado */
        th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
        }

        /* Estilo para las celdas de encabezado (cabecera) */
        th {
        background-color: #f2f2f2;
        }

        /* Estilo para las filas impares */
        tr:nth-child(odd) {
        background-color: #f9f9f9;
        }

        /* Estilo al pasar el ratón sobre las filas */
        tr:hover {
        background-color: #e5e5e5;
        }

    </style>
</head>
<body>
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
                <td>{{$user->direccion->direccion}}</td>
            </tr>
        @endforeach
    </table>



</body>
</html>