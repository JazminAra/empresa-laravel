@extends('layout')

@section('title', 'Home')

@section('content')
<style>
     .home-container {
        max-width: 1000px;
        margin: 1px auto;
        padding: 30px;
        border: 1px solid #A9A9A9;
        border-radius: 40px;
        background-color: #F0F8FF;
        transform-origin: top center;
    }
    .home-container h2 {
        text-align: center;
        margin-bottom: 0.1px;
        font-size: 1.5rem;
        color: #2C3E50;
        font-weight: bold;
    }
    .outer-container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 2px solid #000; 
        border-radius: 10px;
        text-align: center;
        background-color: #E6E6FA; 
    }
    .empresa {
        font-size: 1.2rem;
        font-weight: bold;
        color: #2C3E50;
        margin-bottom: 10px;
    }
    .container {
        background-color: #FFFFFF;
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

<td class="home-container">
    <h2>HOME</h2>
    <div class="outer-container">
        <div class="empresa">EMPRESA</div>
        <div class="container">
            <h1>Bienvenid@,</h1>
            @auth
            <p>{{auth()->user()->name}}</p>
            @endauth
        </div>
        <div>
            <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
        </div>
    </div>
</td>
@endsection