@extends('layouts.app')

@section('contenido')
<div class="portacortina portacortina__contenedor" >
    <h1>CORTINAS MODERNAS</h1>
    <p>cotiza tu espacio y obten la medicion gratis</p>
</div>

<div>
  <p>TIPOS DE CONFECCIÓN</p>
</div>
 <div class="cortinas-main cortinas-main__contenedor">
    <div class="cortinas-img">

        <img src="https://decorapro-wp.s3.amazonaws.com/2023/01/CONFECCION-CORTINA-FRUNCIDA-1-1.jpg.webp" alt="">
    </div>
    <div class="cortinas-texto">
        <h3>PLISADO FRANCÉS</h3>
         <p>Confección clásica, con pliegues continuos. Resultado elegante, muy utilizado para visillos o cortinas decorativas.</p>
         <span>Soporte</span>
         <p>riel</p>
    </div>
    <div class="cortinas-img">

        <img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Cortina-onda-perfecta.jpg.webp" alt="">
    </div>
    <div class="cortinas-texto">
        <h3>ONDA PERFECTA</h3>
         <p>Confección moderna con ondas que simulan ollados, sin recortes circulares.  Resultado es proporcional y ordenado.</p>
         <span>Soporte</span>
         <p>riel</p>
    </div>

 </div>

<div class=" portadaper-video portadaper-video__contenedor" >
    <div class="video-background">
    <video autoplay muted loop id="bg-video">
        <source src="https://decorapro-wp.s3.amazonaws.com/web/Video-de-Cortinas-automatizadas-para-oagina.mp4" type="video/mp4">
        Tu navegador no soporta videos HTML5.
    </video>
    <div class="content">
        <h2>Percianas Eléctricas</h2>
        <p>Programa tu despertar de lunes a vienres y concientete el fin de semana descansando mas tiempo</p>
        <p>Compatibilidad con:</p>

    </div>
    </div>
</div>


@endsection
