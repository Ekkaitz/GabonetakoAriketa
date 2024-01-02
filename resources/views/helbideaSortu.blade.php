<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Helbidea sortu</h1>

    <form action="/helbidea/gorde">
        @csrf
        <input type="text" name="helbidea" id="helbidea" placeholder="helbidea">
        <input type="submit" value="Sortu">
    </form>
</body>
</html>