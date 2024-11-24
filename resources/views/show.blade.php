@extends('layout')
@section('title', 'Persona | ' . $persona->nPerCodigo)

@section('content')
<style>
.action-buttons {
    display: flex;
    align-items: center;
    gap: 10px;
}

.action-button {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 1.3em;
}

.edit-button {
    color: #fcaa5d;
}

.edit-button:hover {
    color: gold; /* Cambia el color cuando el mouse pasa por encima */
}

.delete-button {
    color: red;
}

.delete-button:hover {
    color: darkred; /* Cambia el color cuando el mouse pasa por encima */
}

.action-button i {
    pointer-events: none; /* Asegura que los iconos no capturen eventos del mouse */
}

.card-title-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}


.card-text {
    font-size: 1em;    
    background-color: #F0F8FF;
    border: 2px solid #000; 
}
</style>
@auth
<div class="card" style="width: 20rem; border: 2px solid #000">
    <img src="{{ asset('storage/' . $persona->image) }}" class="card-img-top" alt="{{$persona->nPerCodigo}}">
    <div class="card-body">
        <div class="card-title-container">
            <h5 class="card-title"><strong>{{$persona->cPerNombre}} {{$persona->cPerApellido}}</strong></h5>
            <div class="action-buttons">
                <a href="{{ route('personas.edit', $persona) }}" class="action-button edit-button" title="Editar">
                    <i class="fas fa-pencil-alt"></i></a>
                <form action="{{ route('personas.destroy', $persona) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-button delete-button" title="Eliminar">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
        <p class="card-text">
            <strong>Código:</strong> {{$persona->nPerCodigo}}<br>
            <strong>Apellido:</strong> {{$persona->cPerApellido}}<br>
            <strong>Nombre:</strong> {{$persona->cPerNombre}}<br>
            <strong>Dirección:</strong> {{$persona->cPerDireccion}}<br>
            <strong>Fecha de Nacimiento:</strong> {{$persona->dPerFecNac}}<br>
            <strong>Edad:</strong> {{$persona->nPerEdad}}<br>
            <strong>Sexo:</strong> {{$persona->cPerSexo == 'Masculino' ? 'Masculino' : 'Femenino'}}<br>
            <strong>Sueldo:</strong> {{number_format($persona->nPerSueldo, 2)}}<br>
            <strong>RND:</strong> {{$persona->cPerRnd}}<br>
            <strong>Estado:</strong> {{$persona->nPerEstado == 1 ? '1' : '2'}}<br>
            <strong>Fecha de Creación:</strong> {{$persona->created_at->diffForHumans()}}<br>
        </p>
    </div>
</div>
@endauth
@endsection
