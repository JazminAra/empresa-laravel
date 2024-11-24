@extends('layout')

@section('title', 'Crear Persona')

@section('content')
<table cellpadding="3" cellspacing="5">
    <tr>
        <th colspan="2">Crear nueva Persona</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{ route('personas.store') }}" method="post" enctype="multipart/form-data">
        @include('partials.form',['btnText' => 'Guardar'])
    </form>
</table>
@endsection
