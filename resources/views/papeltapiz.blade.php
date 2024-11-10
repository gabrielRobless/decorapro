@extends('layouts.app')

@section('contenido')

<h1>Papel tapiz 2</h1>
<form action="{{ route('papelt') }}" method="GET">
    <label for="color">Filtrar por color:</label>
    <select name="color" id="color">
        <option value="">Todos los colores</option>
        <option value="Rojo">Rojo</option>
        <option value="Azul">Azul</option>
        <option value="Verde">Verde</option>
        <option value="Café">Café</option>
        <option value="Gris">Gris</option>
        <option value="Blanco">Blanco</option>
        <option value="Beige">Beige</option>
        <option value="Negro">Negro</option>
        <option value="Amarillo">Amarillo</option>
        <option value="Rosa">Rosa</option>
        <option value="Verde">Verde</option>
        <!-- Agrega más opciones de color según lo necesites -->
    </select>
    <button type="submit">Filtrar</button>
</form>


<div class="papel-grind papel__contenedor">
    @foreach($papel as $item)
        <div class="card-papel">
            <a href="{{ route('producto.show', $item->id) }}" class="card-papel">
            @php
            // Separar las URLs por coma y obtener la primera
            $imagenes = explode(',', $item->Imágenes);
            $primeraImagen = trim($imagenes[0]); // Obtener la primera imagen y eliminar espacios en blanco
            @endphp
        <img class="img-papel" src="{{ $primeraImagen }}" width="200" height="200" alt="imagen">

        <p>{{ $item->Nombre }}-{{ $item->Tipo }}</p>
        <li> - {{ $item->SKU }}</li>
        </a>
        </div>
    @endforeach

</div>
<div class="pagination">
    {{ $papel->links() }}
</div>

@endsection
