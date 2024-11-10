@extends('layouts.app')

@section('contenido')

<p>{{ $papel->Categorías }}</p>
<div class="producto-detalle">


    <div class="galeria">
                <!-- Imágenes en miniatura -->
        <div class="miniaturas">
            @foreach($imagenes as $imagen)
                <img class="producto-min" src="{{ trim($imagen) }}" alt="Miniatura" class="miniatura" width="100px" onclick="cambiarImagen('{{ trim($imagen) }}')">
            @endforeach
        </div>
        <!-- Imagen principal -->
        <div class="imagen-principal">
            <img id="imagenPrincipal"src="{{ explode(',', $papel->Imágenes)[0] }}" alt="Imagen principal" width="400">
        </div>


    </div>

    <div class="datos">
        <h1>{{ $papel->Nombre }}</h1>
        <p>{{ $papel->SKU }}</p>
        <p>{{$papel->getAttribute('Valor(es) del atributo 3')}}</p>
        <p>{{$papel->getAttribute('Precio normal')}}</p>

    </div>






</div>
<div class="descripcionl">{!! $papel->Descripción!!}</div>
<script>
    function cambiarImagen(imagen) {
        document.getElementById('imagenPrincipal').src = imagen;
    }
</script>

<style>
    .producto-detalle{
        display: grid;
        grid-template-columns: 1fr 1fr
    }
    .descripcionl img{
        width: auto;
}


.galeria {
        display: flex;
    }

    .imagen-principal {
        flex: 2;
        margin-right: 1rem;
    }

    .miniaturas .producto-min {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        flex: 1;
        width: 100px;
    }

    .miniatura {
        cursor: pointer;
        transition: transform 0.3s;
    }

    .miniatura:hover {
        transform: scale(1.1);
    }
</style>




@endsection
