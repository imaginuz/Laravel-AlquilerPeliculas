@extends('home')

@section('hijos')
<h1>Vista Clientes</h1><br>
<form action="/cliente/{{$editcliente->id}}" method="POST">
    @csrf
    @method('PUT')
    <label for="txtid">Id</label>
    <input type="text" name="id" id="id" value="{{$editcliente->id}}" readonly onmousedown="return false;>

    <label for="txtnombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre" value="{{$editcliente->Nombre}}">

    <label for="txtapellido">Apellido</label>
    <input type="text" name="Apellido" id="Apellido" value="{{$editcliente->Apellido}}"><br><br>

    <label for="txtid">Direccion</label>
    <input type="text" name="Direccion" id="Direccion" value="{{$editcliente->Direccion}}">

    <label for="txttelefono">Telefono</label>
    <input type="text" name="Telefono" id="Telefono" value="{{$editcliente->Telefono}}">

    <button type="submit">Aplicar Cambios</button>
</form>
@endsection