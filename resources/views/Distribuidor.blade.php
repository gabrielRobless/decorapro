@extends('layouts.app')

@section('contenido')

<div class="distribuidor--baner distribuidor--baner__contenedor" >
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
   <p>Envianos un mensaje</p>
   <form class="form-distribuidor-contacto" action="{{ route('enviar.formulario') }}" method="get">
    @csrf
    <input type="text" name="nombre" placeholder="Tu nombre" required>
    <div class="form-inter-d">
    <input type="email" name="email" placeholder="Tu email" required>
    <input type="number" name="telefono" placeholder="Tu teléfono" required>
    </div>
    <select name="producto" required>
        <option value="" disabled selected>Selecciona un producto</option>
        <option value="papel">Papel Tapiz</option>
        <option value="persianas">Persianas</option>
        <option value="cortinas">Cortinas</option>
    </select>

    <textarea name="mensaje" placeholder="Tu mensaje" cols="30" rows="10" required></textarea>
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
          <div class="slide"><img src="https://decorapro-wp.s3.amazonaws.com/2024/01/300788Moana_Galerie900x1350.webp" alt="Image 1"></div>
          <div class="slide"><img src="https://decorapro-wp.s3.amazonaws.com/2024/01/300788Moana_Galerie900x1350.webp" alt="Image 2"></div>
          <div class="slide"><img src="https://decorapro-wp.s3.amazonaws.com/2024/01/300788Moana_Galerie900x1350.webp" alt="Image 3"></div>
        </div>
        <button class="prev"><</button>
        <button class="next">></button>
      </div>



 </div>
</div>
@endsection
