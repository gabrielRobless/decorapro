@extends('layouts.app')

@section('contenido')



<div class="breadcrum__contenedor">

    <a href="http://localhost//persianas/products/?coleccion={{ $persiana->Categorías }}"><p>{{ $persiana->Categorías }}</p> </a>
</div>



<div class="producto-detalle producto-detalle__contenedor">

    <div class="galeria">
                <!-- Imágenes en miniatura -->
        <div class="miniaturas">
            @foreach($imagenes as $imagen)
                <img class="producto-min" src="{{ trim($imagen) }}" alt="Miniatura" class="miniatura" width="100px" onclick="cambiarImagen('{{ trim($imagen) }}')">
            @endforeach
        </div>
        <!-- Imagen principal -->
        <div class="imagen-principal">
            <img id="imagenPrincipal"src="{{ explode(',', $persiana->Imagenes)[0] }}" alt="Imagen principal" width="400" height="400">
        </div>


    </div>

    <div class="datos">
        <h1>{{ $persiana->Nombre }}</h1>
        <p>{{ $persiana->SKU }}</p>
        <p>{{$persiana->getAttribute('Valor(es) del atributo 3')}}</p>
        <p>{{$persiana->getAttribute('Precio normal')}}</p>

    </div>
</div>






</div>
<div class="descripcionl">{!! $persiana->Descripción!!}</div>
<script>
    function cambiarImagen(imagen) {
        document.getElementById('imagenPrincipal').src = imagen;
    }
</script>

<style>

</style>




@endsection
