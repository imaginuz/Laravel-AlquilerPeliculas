@extends('home')

@section('hijos')

<h1>Editar Alquiler</h1><br>
<form action="/alquiler/{{$editalquiler->id}}" method="POST">
    @csrf
    @method('PUT')
    <label for="txtid">Id</label>
    <input type="text" name="id" id="id" value="{{$editalquiler->id}}" readonly onmousedown="return false;>

    <label for="txtcliente_id">cliente_id</label>
    <input type="text" name="cliente_id" id="cliente_id" value="{{$editalquiler->cliente_id}}">

    <label for="txtpelicula_id">pelicula_id</label>
    <input type="text" name="pelicula_id" id="pelicula_id" value="{{$editalquiler->pelicula_id}}"><br><br>

    <label for="txtFechaAlquiler">FechaAlquiler</label>
    <input type="date" name="FechaAlquiler" id="FechaAlquiler" value="{{$editalquiler->FechaAlquiler}}">

    <label for="txtFechaDevolucion">FechaDevolucion</label>
    <input type="date" name="FechaDevolucion" id="FechaDevolucion" value="{{$editalquiler->FechaDevolucion}}">

    <button type="submit">Aplicar Cambios</button>
</form>
@endsection