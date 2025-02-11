@extends('layouts.app')

@section('contenido')

<div class="breadcrum__contenedor">

    <a href="http://localhost/papeltapiz?coleccion={{ $papel->Coleccion }}"><p class="bread-crum">{{ $papel->Categorias }}</p> </a>
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
            <img id="imagenPrincipal"src="{{ explode(',', $papel->Imagenes)[0] }}" alt="Imagen principal" width="400">
        </div>


    </div>

    <div class="datos">
        <h1>{{ $papel->Nombre }}</h1>
        <div class="info-papel">

            <p>Sku: {{ $papel->SKU }}</p>
            <p class="papel-etiqueta">Etiquetas: {{ $papel->Etiquetas }}</p>
        </div>


        <table>
            <tbody>
                <tr>
                    <th>Peso</th>
                    <td>{{ $papel->Pesokg }}</td>
                </tr>
                <tr>
                    <th>Color</th>
                    <td>{{ $papel->Color }}</td>
                </tr>
                <tr>
                    <th>Fabricante</th>
                    <td>{{ $papel->Fabricante }}</td>
                </tr>
                <tr>
                    <th>Colección</th>
                    <td>{{ $papel->Coleccion }}</td>
                </tr>
                <tr>
                    <th>Formato</th>
                    <td>{{ $papel->Formato }}</td>
                </tr>

            </tbody>

        </table>
    </div>






</div>

<div class="descripcionl descripcionl__contenedor">
    <p class="descripcionl-papel">DESCRIPCIÓN</p>
    {!! $papel->Descripcion!!}
</div>

<div class="productos-relacionados productos-relacionados__contenedor">
    <h2>También te puede interesar</h2>
    <div class="grid-relacionados">
        @foreach($productosRelacionados as $producto)
        <a href="{{ route('producto.show', ['id' => $producto->id]) }}">
        <div class="producto-item">

                <img src="{{ explode(',', $producto->Imagenes)[0] }}" alt="{{ $producto->Nombre }}" width="150">
                <h3>{{ $producto->Nombre }}</h3>
                <p>SKU: {{ $producto->SKU }}</p>

            </div>
        </a>
        @endforeach
    </div>
</div>

<style>
    .grid-relacionados {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
    }

    .producto-item {
        text-align: center;
        border: 1px solid #ddd;
        padding: 10px;

    }

    .producto-item img {
        max-width: 100%;
        border-radius: 4px;
    }
    .producto-item h3{
        color: #86ae49 ;
    }
</style>



<script>
    function cambiarImagen(imagen) {
        document.getElementById('imagenPrincipal').src = imagen;
    }
</script>






@endsection
