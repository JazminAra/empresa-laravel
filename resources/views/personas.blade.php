@extends('layout')

@section('content')
    <tr>
        <td style="background-color: white;">
        <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
        @isset($category)
           <div>
                <h1 class="display-4 mb-0">{{ $category->name }}</h1>
                <a href="{{ route('personas.index') }}">Regresar a Personas</a>
            </div>
        @else
            <h1 class="display-4 mb-0">Personas</h1>
        @endisset
        @auth
        <td colspan="5" style="background-color: white;">
           <a class="btn btn-primary"  href="{{route('personas.create')}}"> Crear Nueva Persona</a></td>
        @endauth
        </td>
    </tr>
    <tr>
    <td colspan="5">
    <p class="Lead text-secondary">Listado de Personas</p>
        <div class="d-flex flex-wrap justify-content-between align-items-start">
        @forelse($personas as $persona)
            <div class="card border-e shadow-sm mt-4 mx-auto" style="width: 18rem"> 
                @if($persona->image)
                  <img src="/storage/{{ $persona->image }}" alt="{{ $persona->titulo }}" width="285" height="200">
                @endif
                <div class="card-body">
                    <h5 class="card-title">
                       <a href="{{ route('personas.show',  $persona->nPerCodigo) }}">
                       {{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</a>
                    </h5>
                    <h6 class="card-subtitle">{{ $persona->created_at->format('d/m/Y')}}</h6>
                    <p class="card-text text-truncate">{{ $persona->cPerDireccion }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('personas.show',  $persona->nPerCodigo) }}"
                            class="btn btn-primary btn-sm"
                            >Ver más...</a>
                            @if($persona->category_id)
                                <a href="{{ route('categories.show', $persona->category) }}" class="badge badge-secondary">{{  $persona->category->name}}</a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body">
                         No existen personas
                    </div>
                </div>
            @endforelse
        </div>
        <div class="mt-4">
            {{$personas->links('pagination::bootstrap-4')}}
        </div>
    </td>
    </tr>
@endsection
