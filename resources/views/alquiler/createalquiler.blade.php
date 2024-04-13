@extends('home')
@section('hijos')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">

</head>
<body>
    <div class="container">
        <form action="/alquiler" method="POST">
            @csrf
            <h1>Nuevo Alquiler</h1><br>
            <label for="">cliente_id</label>
            <input type="text" name="cliente_id" id="cliente_id"><br><br>
        
            <label for="">pelicula_id</label>
            <input type="text" name="pelicula_id" id="pelicula_id"><br><br>
        
            <label for="">FechaAlquiler</label>
            <input type="date" name="FechaAlquiler" id="FechaAlquiler"><br><br>
        
            <label for="">FechaDevolucion</label>
            <input type="date" name="FechaDevolucion" id="FechaDevolucion"><br><br>
        
            <button type="submit">Registrar</button>
        </form>
        
    </div>
</body>
</html>

@endsection