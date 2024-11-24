<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje Recibido</title>
</head>
<body>
<table border="0">
    <tr>
        <td colspan="2">Recibiste un correo del sistema automatico</td>
    </tr>
    <tr>
        <td><b>Nombre</b></td><td>{{ $mensaje['nombre'] }}</td>
    </tr>
    <tr>
        <td><b>Correo</b></td><td>{{ $mensaje['email'] }}</td>
    </tr>
    <tr>
        <td><b>Asunto</b></td><td>{{ $mensaje['asunto']}}</td>
    </tr>
    <tr>
        <td><b>Mensaje</b></td><td>{{ $mensaje['mensaje']}}</td>
    </tr>
</table>
</body>
</html>
