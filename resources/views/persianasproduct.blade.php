@extends('layouts.app')

@section('contenido')




<div class="papel-grind--body papel-grind--body__contenedor">
    <div class="pael-fomr-body">
        <form action="{{ route('persianaspro') }}" method="GET"  class="formulario-tapiz">


        <div class="form-radio">
            <p>Color</p>
         <div class="dplay-coloresfiltro" style="">


            <div>
                <input type="radio" id="Gris" name="color" value="Gris">
                <label for="Gris"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Gris.jpg" width="10px" style="max-width: 30px"  alt=""></label>
            </div>
            <div>
                <input type="radio" id="Negro" name="color" value="Negro">
                <label for="Negro"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Negro.jpg" width="10px" style="max-width: 30px"  alt=""></label>
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

        </div>
        <div class="form-radio">
            <p>Tipo</p>
            <div>
                <input type="radio" id="Blackout" name="tipo" value="Blackout">
                <label for="Blackout">Blackout</label>
            </div>
            <div>
                <input type="radio" id="MallaSolar" name="tipo" value="Malla Solar">
                <label for="MallaSolar">Malla Solar</label>
            </div>

            <div>
                <input type="radio" id="Traslúcidas" name="tipo" value="Traslúcidas">
                <label for="Traslúcidas">Semi Traslúcida</label>
            </div>
            <div>
                <input type="radio" id="Sheer Blackout" name="tipo" value="Sheer Blackout">
                <label for="Sheer Blackout">Sheer Dim Out</label>
            </div>
            <div>
                <input type="radio" id="Sheer Traslúcida" name="tipo" value="Sheer Traslúcida">
                <label for="Sheer Traslúcida">Sheer Traslúcida</label>
            </div>
            <div>
                <input type="radio" id="Sheer Traslúcida" name="tipo" value="Madera">
                <label for="Madera">Madera</label>
            </div>
            <div>
                <input type="radio" id="Triple Shade" name="tipo" value="Triple Shade">
                <label for="Triple Shade"> Triple Shade</label>
            </div>


        </div>
        <div class="form-radio">
            <p>Telas:</p>
            <div>
                <input type="radio" id="Triple Shade" name="tela" value="Bimini">
                <label for="Bimini">Bimini</label>
            </div>
            <div>
                <input type="radio" id="Captiva" name="tela" value="Captiva">
                <label for="Captiva">Captiva</label>
            </div>
            <div>
                <input type="radio" id="Daku" name="tela" value="Daku">
                <label for="Daku">Daku</label>
            </div>
            <div>
                <input type="radio" id="Imagine" name="tela" value="Imagine">
                <label for="Imagine">Imagine</label>
            </div>
            <div>
                <input type="radio" id="Premium" name="tela" value="Premium">
                <label for="Premium">Premium</label>
            </div>
            <div>
                <input type="radio" id="Exquisite" name="tela" value="EXQUISITE">
                <label for="Exquisite">Exquisite</label>
            </div>
            <div>
                <input type="radio" id="Singular" name="tela" value="Singular">
                <label for="Singular">Singular</label>
            </div>
            <div>
                <input type="radio" id="Malla Solar" name="tela" value="Malla Solar">
                <label for="Malla Solar">Malla Solar</label>
            </div>
            <div>
                <input type="radio" id="Stucco" name="tela" value="Stucco">
                <label for="Stucco">Stucco</label>
            </div>
            <div>
                <input type="radio" id="Sunset" name="tela" value="Sunset">
                <label for="Sunset">Sunset</label>
            </div>
            <div>
                <input type="radio" id="Baru" name="tela" value="Baru">
                <label for="Baru">Baru</label>
            </div>
            <div>
                <input type="radio" id="Bryson" name="tela" value="Bryson">
                <label for="Bryson">Bryson</label>
            </div>
            <div>
                <input type="radio" id="Napa" name="tela" value="Napa">
                <label for="Napa">Napa</label>
            </div>

        </div>




        <button type="submit">Filtrar</button>
    </form>
    </div>
    <div class="papel-block">
        <div class="papel-baner">
            <div class="papel-baner-img">
                <img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Persianas-Sheer-9-edit-3.jpeg" alt="">
            </div>
            <div class="papel-baner-text">
                <h1>PERSIANAS MODERNAS</h1>
                <P>Cotza tu espacio y obten la medicion gratis</P>
                <p>Expertos a tu servicio</p>
                <p>Tiempo de entrega garanitzado</p>

            </div>
        </div>
        <div class="papel-grind ">
            @foreach($persiana as $item)
            <div class="card-papel">
                <a href="{{ route('persianaspro.show', $item->id) }}" class="card-papel">
                    @php
                    // Separar las URLs por coma y obtener la primera
                    $imagenes = explode(',', $item->Imagenes);
                    $primeraImagen = trim($imagenes[0]); // Obtener la primera imagen y eliminar espacios en blanco
                    @endphp
                    <img class="img-papel" src="{{ $primeraImagen }}" width="200" height="200" alt="imagen">

                    <p>{{ $item->Nombre }}-{{ $item->Tipo }}</p>

                </a>
            </div>
            @endforeach
        </div>

    </div>


</div>

<div class="pagination">
    {{ $persiana->links() }}
</div>

@endsection
