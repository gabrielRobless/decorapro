@extends('layouts.app')

@section('contenido')


<div class="papel-grind--body papel-grind--body__contenedor">
<div class="pael-fomr-body">
    <button id="toggle-filters" class="filtro-btn">Filtros</button>
<form action="{{ route('papelt') }}" method="GET" class="formulario-tapiz" id="filter-container" >
    <button type="submit">Filtrar</button>
    <div class="form-radio">
        <p>Tiempo de Entrega</p>
        <div>
            <input type="radio" id="Inmediata" name="entrega" value="Entrega Inmediata (3 - 4 días)">
            <label for="Inmediata">Entrega Inmediata </label>
        </div>
        <div>
            <input type="radio" id="Entrega" name="entrega" value="Entrega (4 - 5 semanas)">
            <label for="Entrega">Bajo pedido <br> (4-5 semanas)</label>
        </div>

    </div>

    <div class="form-radio">

        <p>Color</p>
     <div class="dplay-coloresfiltro" style="">


        <div>
            <input type="radio" id="Gris" name="color" value="Gris">
            <label for="Gris"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Gris.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
        <div>
            <input type="radio" id="Negro" name="color" value="Negro">
            <label for="Negro"><div class="dplay-coloresfiltro-interno"></div></label>
        </div>
        <div>
            <input type="radio" id="Marron" name="color" value="Marron">
            <label for="Marron"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Marron.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
        <div>
            <input type="radio" id="Rojo" name="color" value="Rojo">
            <label for="Rojo"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Rojo.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
        <div>
            <input type="radio" id="Naranja" name="color" value="Naranja">
            <label for="Naranja"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Naranja.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
        <div>
            <input type="radio" id="Amarillo" name="color" value="Amarillo">
            <label for="Amarillo"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Amarillo.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
        <div>
            <input type="radio" id="Amarillo" name="color" value="Amarillo">
            <label for="Amarillo"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Amarillo.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
        <div>
            <input type="radio" id="Verde" name="color" value="Verde">
            <label for="Verde"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Verde.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
        <div>
            <input type="radio" id="Azul" name="color" value="Azul">
            <label for="Azul"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/azul.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>

        <div>
            <input type="radio" id="Morado" name="color" value="Morado">
            <label for="Morado"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Violeta.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
        <div>
            <input type="radio" id="Rosa" name="color" value="Rosa">
            <label for="Rosa"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Rosa.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
        <div>
            <input type="radio" id="Beige" name="color" value="Beige">
            <label for="Beige"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Beige-1.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
        <div>
            <input type="radio" id="Marfil" name="color" value="Marfil">
            <label for="Marfil"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Marfil.jpg" width="10px" style="max-width: 30px"  alt=""></label>
        </div>
    </div>
    <div class="form-radio">
        <p>Estilos</p>
        <div>
            <input type="radio" id="Lisos" name="estilos" value="Lisos">
            <label for="Lisos">Lisos</label>
        </div>
        <div>
            <input type="radio" id="Textiles" name="estilos" value="Textiles">
            <label for="Textiles">Textiles</label>
        </div>
        <div>
            <input type="radio" id="industrial" name="estilos" value="industrial">
            <label for="industrial">Industrial</label>
        </div>
        <div>
            <input type="radio" id="vintage" name="estilos" value="vintage">
            <label for="vintage">Vintage</label>
        </div>
        <div>
            <input type="radio" id="Rayas" name="estilos" value="Rayas">
            <label for="Rayas">Rayas</label>
        </div>
        <div>
            <input type="radio" id="Infantil" name="estilos" value="Infantil">
            <label for="Infantil">Infantil</label>
        </div>
        <div>
            <input type="radio" id="clásico" name="estilos" value="clásico">
            <label for="clásico">Clásico</label>
        </div>
        <div>
            <input type="radio" id="Geométrico" name="estilos" value="Geométrico">
            <label for="Geométrico">Geométrico</label>
        </div>
        <div>
            <input type="radio" id="Texturizado" name="etiquetas" value="Texturizado">
            <label for="Texturizado">Texturizado</label>
        </div>
        <div>
            <input type="radio" id="Ladrillo" name="etiquetas" value="Ladrillo">
            <label for="Ladrillo">Ladrillo</label>
        </div>
        <div>
            <input type="radio" id="Flores" name="estilos" value="Flores">
            <label for="Flores">Flores</label>
        </div>
        <div>
            <input type="radio" id="Marmol" name="estilos" value="Marmol">
            <label for="Marmol">Mármol</label>
        </div>
        <div>
            <input type="radio" id="Plantas" name="estilos" value="Plantas">
            <label for="Plantas">Plantas</label>
        </div>
    </div>

    </div>
    <div class="form-radio">
        <p>Nuestras Marcas</p>
        <div>
            <input type="radio" id="ESTAhome" name="categoria" value="ESTAhome">
            <label for="ESTAhome">Esta Home</label>
        </div>
        <div>
            <input type="radio" id="VerticalArt" name="categoria" value="Vertical Art">
            <label for="VerticalArt">Vertical Art</label>
        </div>
        <div>
            <input type="radio" id="Ravena" name="categoria" value="Ravena">
            <label for="Ravena"> Ravena</label>
        </div>
        <div>
            <input type="radio" id="Emil & Hugo" name="categoria" value="Emil & Hugo">
            <label for="Emil & Hugo">Emil & Hugo</label>
        </div>
        <div>
            <input type="radio" id="Arte" name="categoria" value="Arte">
            <label for="Arte">Arte</label>
        </div>
    </div>
    <div class="form-radio">
        <p>Colecciones:</p>
        <div>
            <input type="radio" id="Shine" name="coleccion" value="Shine">
            <label for="Shine">Shine</label>
        </div>
        <div>
            <input type="radio" id="Matiz" name="coleccion" value="Matiz">
            <label for="Matiz">Matiz</label>
        </div>
        <div>
            <input type="radio" id="Art Deco" name="coleccion" value="Art Deco">
            <label for="Art Deco">Art Deco</label>
        </div>
        <div>
            <input type="radio" id="Paradise" name="coleccion" value="Paradise">
            <label for="Paradise">Paradise</label>
        </div>
        <div>
            <input type="radio" id="Flawless" name="coleccion" value="FLAWLESS">
            <label for="Flawless">Flawless</label>
        </div>
        <div>
            <input type="radio" id="Exquisite" name="coleccion" value="EXQUISITE">
            <label for="Exquisite">Exquisite</label>
        </div>

    </div>










</form>
</div>

<div class="papel-block">
    <div class="papel-baner">
        <div class="papel-baner-img">

        </div>
        <div class="papel-baner-text">
            <h1>MAYORISTA DE PAPEL TAPIZ</h1>
 <br>
            <p>¡Más de 1,200 modelos a elegir!</p>
            <br>

        </div>
    </div>

    <input type="text" id="search" class="buscador-eng"  placeholder="Buscar productos..." />

<!-- Contenedor para mostrar los resultados -->
<div id="productos-list">
    <!-- Los productos encontrados aparecerán aquí -->
</div>
<div class="papel-grind papel__contenedor">

    @foreach($papel as $item)
        <div class="card-papel">
            <a href="{{ route('producto.show', $item->id) }}" class="card-papel">
            @php
            // Separar las URLs por coma y obtener la primera
            $imagenes = explode(',', $item->Imagenes);
            $primeraImagen = trim($imagenes[0]); // Obtener la primera imagen y eliminar espacios en blanco
            @endphp
        <img class="img-papel" src="{{ $primeraImagen }}" width="200" height="200" alt="imagen">

        <p class="card-papel-title"> {!! $item->Nombre!!}</p>
        <p class="card-papel-fabri">{{ $item->{'Valor(es) del atributo 2'} }}</p>

        <li> - {{ $item->SKU }}</li>
        </a>
        </div>
    @endforeach

</div>
</div>
</div>
<div class="pagination">
    {{ $papel->links() }}
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#search').on('input', function() {
            var query = $(this).val();

            if (query.length >= 3) {  // Iniciar la búsqueda cuando el texto tenga al menos 3 caracteres
                $.ajax({
                    url: "{{ route('productos.buscar.ajax') }}",
                    method: "GET",
                    data: { query: query },
                    success: function(data) {
                        $('#productos-list').html(data);
                    }
                });
            } else {
                $('#productos-list').empty(); // Limpiar los resultados si no hay texto
            }
        });
    });




    $(document).on('input', '#search', function() {
    let query = $(this).val();

    if (query.length > 0) {
        $.ajax({
            url: '/productos/buscar/ajax',
            type: 'GET',
            data: { query: query },
            success: function(response) {
                $('#productos-list').html(response);

                // Si hay resultados, ocultamos el elemento con la clase .papel-grind
                if ($('.busqueda-tapiz li').length > 0) {
                    $('.papel-grind').hide();
                } else {
                    $('.papel-grind').show();
                }
            }
        });
    } else {
        $('#productos-list').html('');
        $('.papel-grind').show(); // Si se borra el texto, volvemos a mostrar
    }
});



document.querySelector("#toggle-filters").addEventListener("click", function() {
    let filterContainer = document.querySelector("#filter-container");
    if (filterContainer.classList.contains("mostrar")) {
        filterContainer.classList.remove("mostrar");
    } else {
        filterContainer.classList.add("mostrar");
    }
});


</script>



@endsection
