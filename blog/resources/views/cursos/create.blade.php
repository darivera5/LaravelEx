@extends('layouts.plantilla')

@section('title', 'create')

@section('content')

<h1>Bienvenido, Aquí podras crear un curso</h1>

<form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Descripción:
        <br>
        <textarea name="descripcion"></textarea>
    </label>
    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria">
    </label>
    <br>
    <button type="submit">Enviar formulario</button>

</form>

@endsection()