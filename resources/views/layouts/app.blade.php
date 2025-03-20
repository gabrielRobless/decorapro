<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Decora Pro</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" async>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PCTK4NP');</script>
    <!-- End Google Tag Manager -->

        @vite('resources/css/normalize.css')
        @vite('resources/css/app.css')
        @vite('resources/js/main.js')
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5237548.js"></script>
<!-- End of HubSpot Embed Code -->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCTK4NP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        <header class="header">
            <div class="header__contenedor">
                <div class="header__logo"><a href="{{route('Inicio')}}">
                    <img
                        src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Decora+Pro+logo+Vertical+blanco.png"
                        alt="Logo Decora Pro"
                    /></a>
                </div>



                <nav class="header__nav">
                    <ul>
                        <li class="papeltapiz" ><a href="{{route('papelt')  }}">Papel Tapiz</a></li>
                        <li class="persianas"><a href="{{route('persianas')}}">Persianas</a></li>
                        <li><a href="{{route('cortinas')}}">Cortinas</a></li>
                        <li><a href="{{route('automatizacion')}}">Automatización</a></li>
                        <li><a href="{{route('distribuidor')}}">Quiero ser Distribuidor</a></li>
                    </ul>
                </nav>
                <div class="menu menudostres">
                    <div class="menu__toggle" id="menu__toggle" onclick="toggleMenu()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <nav class="menu__items">
                        <button class="menu__close" onclick="closeMenu()">X</button> <!-- Botón de cerrar -->
                        <a href="{{route('Inicio')}}">Inicio</a>
                        <a href="{{route('papelt')  }}">Papel Tapiz</a>
                        <a href="{{route('persianas')}}">Persianas</a>
                        <a href="{{route('cortinas')}}">Cortinas</a>
                        <a href="{{route('automatizacion')}}">Automatización</a>
                        <a href="{{route('distribuidor')}}">CONTACTO</a>
                        <a href="{{route('Inicio')}}">
                            <img class="logo-mibile-menu"
                                src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Decora+Pro+logo+Vertical+blanco.png"
                                alt="Logo Decora Pro"
                            /></a>
                        <p>GRUPO ASBERT SA DE CV</p>
                    </nav>
                </div>
            </div>
        </header>

        <div class="inactivo sub_papel__contenedor">
            <div class="sub_cat">
                <h2 class="sub_cat__title">Papel Tapiz de Entrega Inmediata</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid">
                    <a class="sub_cat__box" href="/papeltapiz?categoria=Paradise">
                        <img
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Paradise-1.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Paradise</h3>
                    </a>
                    <a class="sub_cat__box" href="/papeltapiz?categoria=Art%20Deco">
                        <img
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Art-Deco-1.webp"
                            alt="Papel Tapiz art Deco"
                        />

                        <h3 class="sub_cat__namecol">Art Deco</h3>
                    </a>
                    <a class="sub_cat__box" href="/papeltapiz?categoria=EXQUISITE">
                        <img
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Narura-1.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Exquisite</h3>
                    </a>
                    <a class="sub_cat__box" href="/papeltapiz?categoria=FLAWLESS">
                        <img
                        width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/1._Classic_Rhomb_Azul_572961-6.png"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Flawless</h3>
                    </a>
                    <a class="sub_cat__box" href="/papeltapiz?categoria=Shine">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/09/shine-923207.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Shine</h3>
                    </a>
                    <a class="sub_cat__box" href="/papeltapiz?coleccion=Matiz">
                        <img
                            src="https://decorapro-wp.s3.us-east-1.amazonaws.com/matiz/page34_img1.webp"
                            alt="Papel Tapiz CDMX"
                            height="80px"
                        />


                        <h3 class="sub_cat__namecol">Matiz</h3>
                    </a>
                </div>
            </div>

            <div class="sub_cat">
                <h2 class="sub_cat__title">Estilos</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid">
                    <a class="sub_cat__box" href="/papeltapiz?estilos=clásico">
                        <img
                        width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/clasico.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Clásico</h3>
                    </a>
                    <a class="sub_cat__box" href="/papeltapiz?estilos=Geométrico">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/geometrico.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Geométrico</h3>
                    </a>
                    <a class="sub_cat__box" href="/papeltapiz?etiquetas=Ladrillo">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/industrial.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Industrial</h3>
                    </a>
                    <a class="sub_cat__box" href="/papeltapiz?estilos=Infantil">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/infalntil.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Infantil</h3>
                    </a>
                    <a class="sub_cat__box" href="/papeltapiz?estilos=Rayas">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/RAVENA_NATURA-RAYAS.webp"
                            alt="RAVENA NATURA RAYAS"
                        />

                        <h3 class="sub_cat__namecol">Rayas</h3>
                    </a>
                    <a class="sub_cat__box" href="/papeltapiz?estilos=Plantas">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/plantas.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Plantas</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="inactivo sub_papel-persianas__contenedor">
            <div class="sub_cat">
                <h2 class="sub_cat__title">Tipos de Persianas</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid-tres">
                    <a class="sub_cat__box" href="/persianas/products?color=&tipo=Malla+Solar">
                        <img
                            width="80px"
                                src="https://decorapro-wp.s3.amazonaws.com/2023/01/malla-solar-decora-pro.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Malla Enrollable</h3>
                    </a>

                    <a class="sub_cat__box" href="/persianas/products?tipo2=Traslúcidas">
                            <img  width="80px"
                                src="https://decorapro-wp.s3.amazonaws.com/2023/01/enrollable-decorativa-decora-pro.webp"
                                alt="Papel Tapiz art Deco"
                            />
                            <h3 class="sub_cat__namecol">Traslúcida Enrollable</h3>

                    </a>
                    <a class="sub_cat__box" href="/persianas/products?tipo=Blackout">
                        <img
                        width="80px"
                          src="https://decorapro-wp.s3.amazonaws.com/2023/01/blacka-out-decora-pro-.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Blackout Enrollable</h3>
                    </a>
                    <a class="sub_cat__box" href="/persianas/products?tipo=Triple+Shade">
                        <img
                        width="80px"
                           src="https://decorapro-wp.s3.amazonaws.com/2023/01/persianas-shangri-la-decoracion.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Triple Shade</h3>
                    </a>
                    <a class="sub_cat__box" href="/persianas/products?tipo=Sheer+Traslúcida">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/SHEER-traslucida-decora-pro.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Sheer Traslúcida</h3>
                    </a>
                    <a class="sub_cat__box" href="/persianas/products?tipo=Sheer+Blackout">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/SHEER-blacka-out-decora-pro.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Sheer Blackout</h3>
                    </a>


                    <a class="sub_cat__box" href="/persianas/products?tipo=Madera">
                        <img
                            width="50px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/persiana-madera-decora-pro.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Madera</h3>
                    </a>
                </div>
            </div>


            </div>
        </div>
        <div class="inactivo sub_papel-cortina__contenedor">
            <div class="sub_cat">
                <h2 class="sub_cat__title">Tipos de Persianas</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid-tres">
                    <a class="sub_cat__box--block" href="http://">
                        <img
                            width="90%"
                                src="https://decorapro-wp.s3.amazonaws.com/2023/01/malla-solar-decora-pro.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Malla Enrollable</h3>
                    </a>
                    <a class="sub_cat__box--block" href="http://">
                        <img  width="90%"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/enrollable-decorativa-decora-pro.webp"
                            alt="Papel Tapiz art Deco"
                        />

                        <h3 class="sub_cat__namecol">Traslúcida Enrollable</h3>
                    </a>



                </div>
            </div>
            <div class="sub_cat">
                <h2 class="sub_cat__title">Modelos Populares</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid-tres ">
                    <a class="sub_cat__box--block" href="http://">
                        <img
                        width="90%"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Bimini-Blackout-White.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol"></h3>
                    </a>
                    <a class="sub_cat__box--block" href="http://">
                        <img
                            width="90%"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Sheer-Premier-Pearl-grey.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol"></h3>
                    </a>
                    <a class="sub_cat__box--block" href="http://">
                        <img
                            width="90%"
                           src="https://decorapro-wp.s3.amazonaws.com/2023/01/Sheer-Premier-Dim-Out-Brown.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol"></h3>
                    </a>



                </div>
            </div>
            <div class="sub_cat">
                <h2 class="sub_cat__title">Papel Tapiz de Entrega inmediata</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid-uno margen">
                    <a class="" href="http://">
                        <img
                        width="80%"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Final-fabrica-de-persianas.webp"
                            alt="Papel Tapiz CDMX"
                        />


                    </a>

                </div>
            </div>
        </div>
        <main>@yield('contenido')</main>
        <footer class="footer">

            <div class="footer__contenedor">
                <div class="footer__menu">
                    <p>PRODUCTOS</p>
                    <ul class="footer__list">
                        <li><a href="{{route('papelt')  }}">Papel Tapiz CDMX</a></li>
                        <li><a href="{{route('persianas')}}">Persianas Modernas</a></li>
                        <li><a href="/automatizacion">Persianas Eléctricas</a></li>
                        <li><a href="{{route('cortinas')}}">Cortinas Modernas</a></li>
                        <li>
                            <a href="/distribuidores"
                                >Distribuidor de Tapiz para Pared</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="footer__menu">
                    <p>PAPEL TAPIZ</p>
                    <ul class="footer__list">
                        <li><a href="/papeltapiz?etiquetas=Texturizado">Texturizado</a></li>
                        <li><a href="/papeltapiz?etiquetas=Ladrillo">Ladrillo</a></li>
                        <li><a href="/papeltapiz?estilos=Geométrico">Geometrico</a></li>
                        <li><a href="/papeltapiz?estilos=Flores">Flores</a></li>
                        <li><a href="/papeltapiz?estilos=Marmol">Mármol</a></li>
                        <li><a href="/papeltapiz?estilos=Plantas">Plantas</a></li>
                    </ul>
                </div>
                <div class="footer__menu">
                    <p>PERSIANAS</p>
                    <ul class="footer__list">
                        <li><a href="/persianas/products?tipo=Triple+Shade">Modernas</a></li>
                        <li><a href="/persianas/products?tipo=Malla+Solar">Enrollables</a></li>
                        <li><a href="/persianas/products?tipo=Sheer+Blackout">Blackout</a></li>
                        <li><a href="/automatizacion">Eléctricas</a></li>
                        <li><a href="/persianas/products?tipo=Sheer+Traslúcida">Sheer Elegance</a></li>
                    </ul>
                </div>
                <div class="footer__menu">
                    <p>CONTACTO</p>
                    <ul class="footer__list">
                        <li>
                            <i class="fa-regular fa-clock"></i><a href="/"
                                >Lunes a Viernes 9:00AM - 7:00PM</a
                            >
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i><a href="tel:5556805178"
                                >(55) 5680-5178</a>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp"></i>
                            <a href="https://wa.me/1234567890"
                                >(55) 7902-2386</a
                            >
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i><a href="mailto:contacto@decorapro.mx"
                                >contacto@decorapro.mx </a
                            >
                        </li>
                    </ul>
                    <p>Visítanos</p>

                    <ul class="footer__list-2">
                        <li>
                            <a href="https://www.facebook.com/DecoraPro1"   target="_blank"> <i class="fa-brands fa-facebook footer__icon"></i>
                                </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/decorapro/" target="_blank" >
                            <i class="fa-brands fa-instagram footer__icon"></i>
                                </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@decorapro9201" target="_blank">
                            <i class="fa-brands fa-youtube footer__icon"></i>
                           </a
                            >
                        </li>
                        <li>
                            <a href="https://mx.pinterest.com/decorapro/" target="_blank">
                            <i class="fa-brands fa-pinterest footer__icon"></i>
                                 </a>
                                </li>
                    </ul>

                    </div>
                    <form class="footer__from" method="POST" action="{{ route('enviar.formulario.post') }}">
                        @csrf

                        <input type="text" name="nombre" placeholder="Nombre" required />

                        <div class="fotter-div-thwo-form">
                            <input  type="tel" name="telefono" placeholder="Teléfono" required />
                            <input type="email" name="email" placeholder="Correo Electrónico" required />
                        </div>

                        <select name="producto" required>
                            <option value="" disabled selected>Selecciona un producto</option>
                            <option value="papel">Papel Tapiz</option>
                            <option value="persianas">Persianas</option>
                            <option value="cortinas">Cortinas</option>
                        </select>

                        <textarea name="mensaje" cols="5" rows="3" placeholder="¿Còmo te podemos ayudar?" required></textarea>

                        <button type="submit" id="submit-btn" class="boton-verde">Enviar</button>

                        <!-- Loader (se oculta por defecto con CSS) -->
                        <div id="loader" class="loader"></div>
                    </form>
                </div>
                <div class="footer--sub footer--sub-2">
                    <p class="text">Un asesor te atenderá en breve</p>
                    <form class="footer__from2" method="POST" action="{{ route('enviar.formulario.post') }}" >
                        @csrf
                        <input type="text" name="nombre" placeholder="Nombre" required />

                        <div class="fotter-div-thwo-form">
                            <input  type="tel" name="telefono" placeholder="Teléfono" required />
                            <input type="email" name="email" placeholder="Correo Electrónico" required />
                        </div>

                        <select name="producto" required>
                            <option value="" disabled selected>Selecciona un producto</option>
                            <option value="papel">Papel Tapiz</option>
                            <option value="persianas">Persianas</option>
                            <option value="cortinas">Cortinas</option>
                        </select>
                        <textarea
                            name=""
                            id=""
                            cols="5"
                            rows="3"
                            placeholder="¿Còmo te podemos ayudar?"
                        ></textarea>
                        <button type="submit" id="submit-btn" class="submit-btn boton-verde">Enviar</button>
                        <div id="loader3" class="loader"></div>
                    </form>

                </div>
            <div class="footer--gris">
                <div class="footer2__contenedor">
                   <a href="/politicas-de-privacidad"> <p>Politicas de Privacidad</p></a>
                   <a href="/terminos-del-servicio"> <p>Términos del Servicio</p></a>
                  <a href="/politica-de-reembolso">  <p>Politicas de Reembolso</p></a>
                </div>
            </div>
            <div class="footer--gris">
                <div class="footer3 footer2__contenedor">
                   <p>GRUPO ASBERT SA DE CV</p>
                </div>
            </div>
        </footer>
        <a href="https://wa.me/5579022386" class="whatsapp-button" target="_blank">
            <i class="fa-brands fa-whatsapp whats__icon"></i>
        </a>
        <script>
            function toggleMenu() {
                document.querySelector('.menu').classList.toggle('open');
            }
            function closeMenu() {
            document.querySelector('.menu').classList.remove('open');
                        }
        </script>

    </body>

    <script>
    $(document).ready(function () {
        console.log("jQuery está cargado."); // Depuración

        $(".footer__from").submit(function (event) {
            event.preventDefault(); // Evita la recarga de la página

            // Mostrar el loader y deshabilitar el botón de envío
            $("#loader").show();
            $("#submit-btn").prop("disabled", true).text("Enviando...");

            console.log("Formulario enviado..."); // Depuración

            $.ajax({
                url: "{{ route('enviar.formulario.post') }}",
                type: "POST",
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function (response) {
                    alert("Formulario enviado correctamente.");
                    $(".footer__from")[0].reset(); // Limpia el formulario
                },
                error: function (xhr) {
                    alert("Error al enviar el formulario.");
                },
                complete: function () {
                    // Ocultar el loader y reactivar el botón después de recibir la respuesta
                    $("#loader").hide();
                    $("#submit-btn").prop("disabled", false).text("Enviar");
                    console.log("Proceso terminado."); // Depuración
                }
            });
        });
    });
    </script>
        <script>
            $(document).ready(function () {
                console.log("jQuery está cargado."); // Depuración

                $(".footer__from2").submit(function (event) {
                    event.preventDefault(); // Evita la recarga de la página

                    // Mostrar el loader y deshabilitar el botón de envío
                    $(".loader").show();
                    $(".submit-btn").prop("disabled", true).text("Enviando...");

                    console.log("Formulario enviado..."); // Depuración

                    $.ajax({
                        url: "{{ route('enviar.formulario.post') }}",
                        type: "POST",
                        data: $(this).serialize(),
                        headers: {
                            'X-CSRF-TOKEN': $('input[name="_token"]').val()
                        },
                        success: function (response) {
                            alert("Formulario enviado correctamente.");
                            $(".footer__from2")[0].reset(); // Limpia el formulario
                        },
                        error: function (xhr) {
                            alert("Error al enviar el formulario.");
                        },
                        complete: function () {
                            // Ocultar el loader y reactivar el botón después de recibir la respuesta
                            $(".loader").hide();
                            $(".submit-btn").prop("disabled", false).text("Enviar");
                            console.log("Proceso terminado."); // Depuración
                        }
                    });
                });
            });
            </script>

</html>
