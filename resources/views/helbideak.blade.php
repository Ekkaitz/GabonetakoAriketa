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