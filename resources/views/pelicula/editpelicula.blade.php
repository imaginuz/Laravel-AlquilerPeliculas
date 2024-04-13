@extends('home')

@section('hijos')

<h1>Editar Pelicula</h1><br>

<form action="/pelicula/{{$editpelicula->id}}" method="POST">
    @csrf
    @method('PUT')
    <label for="txtid">Id</label>
    <input type="text" name="id" id="id" value="{{$editpelicula->id}}" readonly onmousedown="return false;>

    <label for="txtTitulo">Titulo</label>
    <input type="text" name="Titulo" id="Titulo" value="{{$editpelicula->Titulo}}">

    <label for="txtDescripcion">Descripcion</label>
    <input type="text" name="Descripcion" id="Descripcion" value="{{$editpelicula->Descripcion}}"><br><br>

    <label for="txtid">Genero</label>
    <input type="text" name="Genero" id="Genero" value="{{$editpelicula->Genero}}">

    <label for="txtAño">Año</label>
    <input type="text" name="Año" id="Año" value="{{$editpelicula->Año}}">

    <button type="submit">Aplicar Cambios</button>
</form>

@endsection