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
<h1>POST-ak</h1>

<form action="/post/gorde">
        @csrf

        Tituloa: <input type="text" name="title" id="title" placeholder="Title">
        <br>
        <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion" cols="30" rows="10"></textarea>
        <br>
        Erabiltzailea: <select name="user" id="user">  
            @foreach($usuarios as $user)
                <option value="{{$user->id}}">{{$user->izena}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <input type="submit" value="Bidali">
</form>
<br>
<br>
<table>
        <tr>
            <td><b>ID</b></td>
            <td><b>TITLE</b></td>
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
                    {{$post->title}}
                </td>

                <td>
                    <b>DESKRIPZIOA: </b>
                    {{$post->descripcion}}
                </td>

                <td>
                    
                </td>
                
                <td>
                    {{$post->usuario_izena}}
                </td>

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