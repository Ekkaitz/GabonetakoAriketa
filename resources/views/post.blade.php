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
<h1>POST-ak</h1>

<form action="/post/gorde">
        @csrf
        <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion" cols="30" rows="10"></textarea>

        <input type="submit" value="Bidali">
</form>

<table>
        <tr>
            <td><b>ID</b></td>

            <td><b>DESKRIPZIOA</b></td>

            <td><b>GAIA(K)</b></td>

            <td><b>USER</b></td>

            <td></td>

            <td></td>
        </tr>
        @foreach($registro as $post)

            <tr>
                <td>
                    {{$post->id}}
                </td>

                <td>
                    <b>DESKRIPZIOA: </b>
                    {{$post->descripcion}}
                </td>

                <td></td>
                
                <td></td>

                <td>
                    <form action="/post/editatu">
                        <input type="hidden" name="descripcion" id="descripcion" value="{{$post->descripcion}}">
                        <input type="hidden" name="id" id="id" value="{{$post->id}}">
                        <input type="submit" value="Editatu">
                    </form>
                </td>

                <td>
                    <form action="/post/ezabatu/{{$post->id}}">
                        <input type="submit" value="Ezabatu">
                    </form>
                </td>
                
            </tr>
            
        @endforeach
    </table>

</body>
</html>