@extends('layout')

@section('title','Contacto')

@section('content')
<style>
     .contact-form-container {
        max-width: 1000px;
        margin: 1px auto;
        padding: 30px;
        border: 1px solid #A9A9A9;
        border-radius: 40px;
        background-color: #F0F8FF;
        transform-origin: top center;
    }
    .contact-form-container h2 {
        text-align: center;
        margin-bottom: 0.1px;
        font-size: 1.5rem;
        color: #2C3E50;
        font-weight: bold;
    }
    .contact-form-container .form-group {
        margin-bottom: 0.1px; /* Espaciado entre grupos de formulario */
        font-weight: bold;
    }
    .contact-form-container .form-group.nombre-group {
        margin-top: 0; /* Ajuste del margen superior del grupo "Nombre" */
    }
    .contact-form-container .form-group label {
        color: #000000;
    }
    .contact-form-container .form-control {
        border-radius: 2px;
    }
    .contact-form-container .btn-primary {
        background-color: #28a745;
        border-color: #007bff;
    }
    .contact-form-container .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }
    .contact-form-container .text-danger {
        font-size: 0.7rem; /* Tamaño de fuente reducido */
    }
    .contact-form-container .form-group.text-center {
        margin-top: 6px; /* Margen superior para los botones */
    }
    .outer-container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 2px solid #000; /* Doble marco negro */
        border-radius: 10px;
        text-align: center;
        background-color: #FFFFFF; 
    }
    .empresa {
        font-size: 1.2rem;
        font-weight: bold;
        color: #2C3E50;
        margin-bottom: 10px;
    }
    .container {
        background-color: #E6E6FA;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #A9A9A9;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        font-size: 1rem;
        color: #2C3E50;
        font-weight: bold;
    }
    p {
        font-size: 1rem;
        color: #2C3E50;
        margin-bottom: 20px;
    }
</style>

<div class="contact-form-container">
    <h2>CONTACTO</h2>
    
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('nombre'))
    <div class="outer-container">
        <div class="empresa">EMPRESA</div>
        <div class="container">
            <h1>Confirmación de mensaje enviado</h1>
            <p>Gracias por ponerte en contacto {{ session('nombre') }}, te responderemos a la brevedad posible.</p>
        </div>
        <div>
            <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
        </div>
    </div>
    @else
    <form action="{{ route('contacto') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" value="{{ old('nombre') }}">
            @if($errors->has('nombre'))
                <div class="text-danger">{{ $errors->first('nombre') }}</div>
            @endif
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
            @endif
        </div>
        
        <div class="form-group">
            <label for="asunto">Asunto</label>
            <input type="text" name="asunto" id="asunto" placeholder="Asunto" class="form-control" value="{{ old('asunto') }}">
            @if($errors->has('asunto'))
                <div class="text-danger">{{ $errors->first('asunto') }}</div>
            @endif
        </div>
        
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" cols="20" rows="3" placeholder="Mensaje" class="form-control">{{ old('mensaje') }}</textarea>
            @if($errors->has('mensaje'))
                <div class="text-danger">{{ $errors->first('mensaje') }}</div>
            @endif
        </div>
        
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="button" class="btn btn-secondary" onclick="location.reload();">Cancelar</button>
        </div>
    </form>
    @endif
</div>
@endsection
