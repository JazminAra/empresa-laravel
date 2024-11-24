<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Times New Roman';
            background-color: #f4f4f4;
            color: #333;
            padding-bottom: 80px; /* Ajuste para evitar que el footer cubra el contenido */
        }
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: black;
            color: white;
            padding: 20px 0;
            border-top: 1px solid #e0e0e0;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }
        .footer div {
            flex: 1;
            text-align: center;
            margin: 10px 0;
        }
        .footer a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            display: inline-block;
            transition: color 0.3s, text-decoration 0.3s;
            font-weight: bold; 
        }
        .footer a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
        .footer p {
            margin: 5px 0;
            color: white;
            font-size: 0.9em;
            font-weight: bold; 
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('nosotros') }}">Nosotros</a>
            <a href="{{ route('personas.index') }}">Personas</a>
            <a href="{{ route('contacto') }}">Contacto</a>
        </div>
        <div>
            <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
