
@extends('layout')

@section('title', 'Confirmación de mensaje enviado con exíto')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Enviado</title>
    <style>
        body {
            font-family: 'Times New Roman';
            background-color: #ceb5b7; /* Amarillo claro */
            margin: 0;
            padding: 0;
        }
        .outer-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #000; /* Doble marco negro */
            border-radius: 10px;
            text-align: center;
            background-color: #ceb5b7; 
        }
        .empresa {
            font-size: 2rem;
            font-weight: bold;
            color: #000;
            margin-bottom: 20px;
        }
        .container {
            background-color: #b5d6d6;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            color: #000;
            font-weight: bold;
        }
        p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="outer-container">
        <div class="empresa">EMPRESA</div>
        <div class="container">
            <h1>Confirmación de mensaje enviado</h1>
            <p>Gracias, {{ $nombre }}. Tu mensaje ha sido enviado con éxito.</p>
            <a href="{{ route('contacto') }}" class="btn btn-primary">Volver al formulario</a>
        </div>
        <div>
            <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>
@endsection
