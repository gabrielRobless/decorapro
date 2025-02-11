@extends('layouts.app')

@section('contenido')
<div class="portacortina portacortina__contenedor" >
    <h1>CORTINAS MEXICO</h1>
    <p>CATORCE DIAS PARA TU ENTREGA</p>
</div>

<div class="cortina-title cortina__contenedor">
    <div class="cortina-title-icon">
    <div class="cortina-line-mid"></div>
    <i class="fa-solid fa-ruler-combined"></i>
    <div class="cortina-line-mid"></div>
    </div>
  <p>TIPOS DE CONFECCIÓN</p>
  <div class="cortina-line-full"></div>
</div>

<div class="cortinas-main-v2 cortinas-main__contenedor">
    <h3>Dunes</h3>
   <div class="cortinas-main-v2-galeri">
    <div>
        <img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Flexilux02.jpg" alt="">
    </div>

    <div>
        <img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Flexilux04.jpg" alt="">
    </div>
    <div>
        <img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Flexilux05.jpg" alt="">
    </div>
    <div>
        <img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Flexilux06.jpg" alt="">
    </div>

   </div>


</div>

<div class="cortinas-main-v2 cortinas-main__contenedor">
    <h3>PLISADO FRANCÉS & ONDA PERFECTA</h3>
   <div class="cortinas-main-v2-galeri">
    <div>
        <img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Cort1.jpg" alt="">
    </div>
    <div>
        <img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Cort3.jpg" alt="">
    </div>
    <div>
        <img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Cort5.jpg" alt="">
    </div>
    <div>
        <img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Cort6.jpg" alt="">
    </div>
    <div>
        <img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Cort7.jpg" alt="">
    </div>
    <div>
        <img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Cort8.jpg" alt="">
    </div>
   </div>


</div>



 <div class="telas-galeri-title telas-galeri-title__contenedor">
    <p>TIPOS DE TELAS</p>
 </div>
 <div class="telas-galeri telas-galeri__contenedor">
    <div class="filter-buttons">
        <button class="active" onclick="filterGallery('all')">Todo</button>
        <button onclick="filterGallery('blackout')">Blackout</button>
        <button onclick="filterGallery('tergal')">Tergal</button>

    </div>

    <div class="gallery2">
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectatergal/RHOD0111.png" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectatergal/RHOD0117.png" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectatergal/RHOD0210.png" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectatergal/TEAV0111.png" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectatergal/TEAV0190.png" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectatergal/TEAV0210.png" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectatergal/TEAV0310.png" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectatergal/TRIP0019.png" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectatergal/TRIP0061.png" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectatergal/TRIP0100.png" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/0-007-04-02203.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00070400503.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00070402203.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00070402303.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00070402903.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00070700703.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00070702603.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00070702703.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00071316001.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00071813002.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00071813004.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00071914001.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00071914002.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00071914003.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00072100001.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00072100008.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00072112588.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00072190402.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00072344131.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00072344133.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00072344136.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00073000103.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00073001700.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00073012285.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00074212774.jpg" alt="Tergal"></div>
        <div class="gallery-item tergal"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertulixtergal/00074290848.jpg" alt="Tergal"></div>

        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/DAIQ0034.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/DAIQ0063.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/DAIQ0065.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/DAIQ0092.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/DAIQ0240.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/DAIQ0260.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/MURA0030.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/MURA0060.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/MURA0061.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/MURA0072.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/MURA0210.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/MURA0220.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/proyectablackout/MURA0610.png" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/0-007-09-01328.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00070901028.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00070902028.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00070902428.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071001828.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071002328.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071002628.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071101403.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071102303.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071102403.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071102603.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071102803.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071201202.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071201203.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071201204.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00071201205.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00072302428.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00072302928.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00072303028.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00072303328.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00072400228.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00072400328.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00072400528.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00072500228.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00072500328.jpg" alt="Blackout"></div>
        <div class="gallery-item blackout"><img src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/vertiluxblackout/00072500528.jpg" alt="Blackout"></div>
      </div>
 </div>
 @vite(['resources/js/gallery.js', 'resources/css/app.css'])

 <div class="telas-galeri-title telas-galeri-title__contenedor">
    <p>¿POR QUÉ ELEGIR DECORA PRO?</p>
 </div>

 <div class="iconos-telas iconos-telas__contenedor">

    <div class="icono-tela">
        <i class="fa-solid fa-pen"></i>
        <div class="icono-tela-text">
            <p>Fabricamos cortinas y persianas a medida. </p>
            <p>Envíos a toda la República</p>
        </div>
    </div>
    <div class="icono-tela">
        <i class="fa-solid fa-medal"></i>
        <div class="icono-tela-text">
            <p>Somos distribuidores de VERTILUX (España). </p>
            <p>2 años de garantía en todos los mecanismos. </p>
        </div>
    </div>
    <div class="icono-tela">
        <i class="fa-solid fa-wifi"></i>
        <div class="icono-tela-text">
            <p>Todas nuestras cortinas y persianas pueden ser automatizadas son compatibles con celular y control remoto.</p>

        </div>
    </div>
 </div>

<div class=" portadaper-video portadaper-video__contenedor" >
    <div class="video-background">
    <video autoplay muted loop id="bg-video">
        <source src="https://decorapro-wp.s3.amazonaws.com/web/Video-de-Cortinas-automatizadas-para-oagina.mp4" type="video/mp4">
        Tu navegador no soporta videos HTML5.
    </video>
    <div class="content">
        <div class="content--perciana">
            <h2>Cortinas Eléctricas Automatizadas</h2>
            <p>Programa tu despertar de lunes a viernes y consiéntete el fin de semana descansando más tiempo.</p>
            <p>Compatibilidad con:</p>
        </div>
        <div class="content--perciana--iconos">
            <div class="content--perciana--icon">
               <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                        height="100" viewBox="0 0 48 48">
                        <path fill="#29b6f6" fill-rule="evenodd"
                            d="M24,4C12.96,4,4.01,12.954,4.01,24	c0,10.141,7.545,18.519,17.325,19.823v-4.03c0-1.136-0.716-2.158-1.793-2.519c-5.643-1.897-9.68-7.293-9.531-13.611	c0.181-7.692,6.444-13.74,14.133-13.662c7.662,0.078,13.849,6.316,13.849,14c0,0.72-0.056,1.44-0.164,2.151	c-1.713,11.291-16.412,17.637-16.492,17.672C22.208,43.939,23.097,44,24,44c11.04,0,19.99-8.954,19.99-20S35.04,4,24,4"
                            clip-rule="evenodd"></path>
                    </svg>
                <p>Alexa</p>
            </div>
            <div class="content--perciana--icon">
                <i class="fa-brands fa-apple"></i>
                <p>Apple</p>
            </div>
            <div class="content--perciana--icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                    <path fill="#fafafa" d="M22.586,4.414L5.879,21.121C5.316,21.684,5,22.447,5,23.243V41c0,1.105,0.895,2,2,2h34 c1.105,0,2-0.895,2-2V23.243c0-0.796-0.316-1.559-0.879-2.121L25.414,4.414C24.633,3.633,23.367,3.633,22.586,4.414z"></path><path fill="#43a047" d="M12 35H36V43H12z"></path><path fill="#fbc02d" d="M13,24v19H7c-1.1,0-2-0.9-2-2V24H13z"></path><path fill="#1e88e5" d="M42.12,21.12L29.59,8.59l-5.55,5.55L35,25.1V43h6c1.1,0,2-0.9,2-2V23.24 C43,22.45,42.68,21.68,42.12,21.12z"></path><path fill="#e64a19" d="M29.59,8.59L5,33.18v-9.94c0-0.79,0.32-1.56,0.88-2.12L22.59,4.41c0.78-0.78,2.04-0.78,2.82,0 L29.59,8.59z"></path>
                    </svg>
                <p>Google Home</p>
            </div>

        </div>

    </div>
    </div>
</div>


@endsection
