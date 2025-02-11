@extends('layouts.app')

@section('contenido')
    <div class="portadaper portadaper__contenedor">
        <a href="/persianas/products">
        <h1 class="portadaper--title">Persianas</h1></a>
        <p class="portadaper--sub--title">cotiza tu espacio y obten la medicion gratis</p>
    </div>

    <div class="cadr--menu cadr--menu__contenedor">
        <div class="cardunity">
            <div class="cardunity__image">
                <img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Persiana-Malla-1.jpeg.webp" alt="">
            </div>
            <div class="cardunity__content">
                <h3>Malla Enrollable</h3>
                <p>Variedad de diseños fabricados con tejidos translúcidos</p>
            </div>
        </div>
        <div class="cardunity">
            <a href="/persianas/products?tipo=Traslucida">
            <div class="cardunity__image">
                <img src="https://decorapro-wp.s3.amazonaws.com/2023/01/persianas-traslucidas-cdmx-mexico-1.jpeg.webp"
                    alt="">
            </div>
            <div class="cardunity__content">
                <h3>Traslucida Enrollable</h3>
                <p>Variedad de mallas solares con protección UV.</p>
            </div>
        </a>
        </div>
        <div class="cardunity">
            <div class="cardunity__image">
                <img src="https://decorapro-wp.s3.amazonaws.com/2023/01/BlackOutpersiana.jpeg.webp" alt="">
            </div>
            <div class="cardunity__content">
                <h3>Blackout Enrollable</h3>
                <p>Variedad de diseños con tela blackout.</p>
            </div>
        </div>

        <div class="cardunity">
            <a href="/persianas/products?tipo=Sheer+Traslúcida">
            <div class="cardunity__image">
                <img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Idea-Persiana-Sheer-Translucida-1.jpeg.webp"
                    alt="">
            </div>
            <div class="cardunity__content">
                <h3>Sheer Traslucida</h3>
                <p>Tejidos translucidos y opacos intercalados de forma horizontal.</p>
            </div>
        </a>
        </div>
        <div class="cardunity">
            <a href="/persianas/products?tipo=Sheer+Blackout">
            <div class="cardunity__image">
                <img src="https://decorapro-wp.s3.amazonaws.com/2023/01/Sheer-bLACK-Out-Persianas-1.jpeg.webp"
                    alt="">
            </div>
            <div class="cardunity__content">
                <h3>Sheer Blackout</h3>
                <p>Tejidos blackout y translucidos intercalados de forma horizontal para brindar mayor control de la luz.</p>
            </div>
        </a>
        </div>


        <div class="cardunity">
            <a href="/persianas/products?tipo=Madera">
            <div class="cardunity__image">
                <img src="https://decorapro-wp.s3.amazonaws.com/2023/01/PERSIANAS-DE-MADERA-CINTILLAS.jpeg.webp"
                    alt="">
            </div>
            <div class="cardunity__content">
                <h3>Persianas Madera</h3>
                <p>Diversidad de colores y grosores. Para oficinas y lugares de mucho trafico.</p>
            </div>
        </a>
        </div>
        <div class="cardunity">
            <a href="/persianas/products?tipo=Triple+Shade">
            <div class="cardunity__image">
                <img src="https://decorapro-wp.s3.amazonaws.com/2023/01/persianas-shangri-la-ventanas.jpeg.webp"
                    alt="">
            </div>
            <div class="cardunity__content">
                <h3>Persianas Triple Shade</h3>
                <p>Proporcionan un confort tal que son muy utilizadas para crear un espacio de paz.</p>
            </div>
        </a>
        </div>

    </div>

    <div class=" portadaper-video portadaper-video__contenedor">
        <div class="video-background">
            <video autoplay muted loop id="bg-video">
                <source src="https://decorapro-wp.s3.amazonaws.com/web/Video-de-Cortinas-automatizadas-para-oagina.mp4"
                    type="video/mp4">
                Tu navegador no soporta videos HTML5.
            </video>
            <div class="content">
                <div class="content--perciana">
                    <h2>Persianas Eléctricas</h2>
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
