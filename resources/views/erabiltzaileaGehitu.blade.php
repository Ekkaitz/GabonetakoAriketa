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
    <h2>Erabiltzailea gehitu</h2>
    <br>
    <form action="/gorde">
        @csrf
        <input type="text" name="nombre" id="nombre" placeholder="Izena" >
        <input type="text" name="apellido" id="apellido" placeholder="Abizena" >

        <input type="submit" value="Bidali">
    </form>
    <br>
    <form action="/helbidea">
        <input type="submit" value="HELBIDEAK">
    </form>
    
    <h3>INFORMAZIOA</h3>
    <table>
        @foreach($usuario as $registro)

            <tr>
                <td>
                    {{$registro->izena}}
                </td>

                <td>
                    <form action="/ezabatu/{{$registro->id}}" >
                        @csrf
                        <input type="submit" value="Ezabatu" class="a">
                    </form>
                </td>

                <td>
                    <form action="/editatu">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$registro->id}}">
                        <input type="hidden" name="izena" id="izena" value="{{$registro->izena}}">
                        <input type="hidden" name="abizena" id="abizena" value="{{$registro->abizena}}">

                        <input type="submit" value="Editatu" class="a" >
                    </form>
                </td>
                
            </tr>
            
        @endforeach
    </table>
</body>
</html>