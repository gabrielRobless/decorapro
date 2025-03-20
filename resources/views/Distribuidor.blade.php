@extends('layouts.app')

@section('contenido')

<div class="distribuidor--baner" >
    <h1>CONTACTO</h1>

    <div class="distribuidor--baner--line"></div>
</div>

<div class="distribuidir--contacto distribuidir--contacto__contenedor">
    <p>¿Tienes Dudas?</p>
    <div class="distribuidir--contacto--menu">
        <div><i class="fa-solid fa-phone"></i>
        <p>Teléfono</p>

            <a href="tel:5579022386">55 7902 2386</a>
        </div>
        <div><i class="fa-solid fa-envelope"></i>
        <p>Mail</p>
        <a href="mailto:5579022386">contacto@decorapro.mx</a>
        </div>
    </div>
</div>
<div class="distribuidor--formulario distribuidor--formulario__contenedor">
 <div class="distribuidor--formulario--inter">
   <p>Envíanos un mensaje</p>
   <form class="form-distribuidor-contacto" action="{{ route('enviar.formulario.post') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" required>
    <div class="form-inter-d">
    <input type="email" name="email" placeholder="Email" required>
    <input  type="tel" name="telefono" placeholder="Teléfono" required>
    </div>
    <select name="producto" required>
        <option value="" disabled selected>Selecciona un producto</option>
        <option value="papel">Papel Tapiz</option>
        <option value="persianas">Persianas</option>
        <option value="cortinas">Cortinas</option>
    </select>

    <textarea name="mensaje" placeholder="Mensaje" cols="30" rows="10" required></textarea>
    <button class="form-dis-b" type="submit">Enviar</button>
</form>
   @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

 </div>
 <div class="distribuidor--formulario--inter--fotos ">
    <div class="slider-container">
        <div class="slider slider-distribuidor">
          <div class="slide"><img src="https://media.vertilux.mx/page/cortina/cortinas-blackout-hotel.jpg" alt="Image 1"></div>
          <div class="slide"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/ANAISPICTNIG401-2.jpg" alt="Image 2"></div>
          <div class="slide"><img src="https://media.vertilux.mx/page/cortina/cortina-blackout-recamara.jpg" alt="Image 3"></div>
          <div class="slide"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/BlackOutpersiana.jpeg.webp" alt="Image 3"></div>
          <div class="slide"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/IGUANAPICTCAB904-2.jpg" alt="Image 3"></div>
          <div class="slide"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Idea-Persiana-Sheer-Translucida-1.jpeg.webp" alt="Image 3"></div>
          <div class="slide"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/KARDINALPICTFOL603-2.jpg" alt="Image 3"></div>
          <div class="slide"><img src="https://decorapro-wp.s3.amazonaws.com/2023/01/KARDINALPICTFOL605-FOL1404-2.jpg" alt="Image 3"></div>
          <div class="slide"><img src="https://media.vertilux.mx/page/cortina/cortinas-blackout-hotel.jpg" alt="Image 1"></div>

        </div>
        <button class="prev"><</button>
        <button class="next">></button>
      </div>



 </div>
</div>
@endsection
