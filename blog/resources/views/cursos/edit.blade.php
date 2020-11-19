@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')

<h1>Bienvenido, Aquí podras editar un curso</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">
    @csrf
    @method('put')
    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{$curso->name}}">
    </label>
    <br>
    <label>
        Descripción:
        <br>
        <textarea name="descripcion" rows="5">{{$curso->descripcion}}
        </textarea>
    </label>
    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{$curso->categoria}}">
    </label>
    <br>
    <button type="submit">Actualizar formulario</button>

</form>

@endsection()