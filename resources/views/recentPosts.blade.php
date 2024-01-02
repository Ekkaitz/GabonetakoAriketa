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
    <table>
        <tr>
            <td><b>id</b></td>
            <td><b>title</b></td>
            <td><b>descripcion</b></td>
            <td><b>created at</b></td>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->descripcion}}</td>
                <td>{{$post->created_at}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>