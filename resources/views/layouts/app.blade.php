<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Decora Pro</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        @vite('resources/css/normalize.css') @vite('resources/css/app.css')
        @vite('resources/js/main.js')
     <!--   <link rel="stylesheet" href="build/assets/app-CS-mQHT-.css">
        <script src="build/assets/app-Qv8jo91D.js"></script>
        <script src="build/assets/axios-CCb-kr4I.js"></script>
        <script src="build/assets/bootstrap-Qv8jo91D.js"></script>
        <script src="build/assets/gallery-DALueDM_.js"></script>
        <script src="build/assets/main-BKgOQmRw.js"></script> -->
    </head>
    <body>
        <header class="header">
            <div class="header__contenedor">
                <div class="header__logo"><a href="{{route('Inicio')}}">
                    <img
                        src="https://decorapro-wp.s3.us-east-1.amazonaws.com/web/Decora-Pro-logo-Vertical-verde-2.png"
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
                        <a href="{{route('distribuidor')}}">Quiero ser Distribuidor</a>
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
                    <a class="sub_cat__box" href="-/papeltapiz?categoria=EXQUISITE">
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
                    <a class="sub_cat__box" href="/papeltapiz?categoria=Paradise">
                        <img
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/khroma-1.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Matiz</h3>
                    </a>
                </div>
            </div>

            <div class="sub_cat">
                <h2 class="sub_cat__title">Estilos</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid">
                    <a class="sub_cat__box" href="http://">
                        <img
                        width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/clasico.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Clásico</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/geometrico.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Geométrico</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/industrial.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Industrial</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/infalntil.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Infantil</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/RAVENA_NATURA-RAYAS.webp"
                            alt="RAVENA NATURA RAYAS"
                        />

                        <h3 class="sub_cat__namecol">Rayas</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
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

                        <h3 class="sub_cat__namecol">Malla <br> Enrollable</h3>
                    </a>

                    <a class="sub_cat__box" href="http://">
                            <img  width="80px"
                                src="https://decorapro-wp.s3.amazonaws.com/2023/01/enrollable-decorativa-decora-pro.webp"
                                alt="Papel Tapiz art Deco"
                            />
                            <h3 class="sub_cat__namecol">Traslúcida Enrollable</h3>

                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                        width="80px"
                          src="https://decorapro-wp.s3.amazonaws.com/2023/01/blacka-out-decora-pro-.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Blackout Enrollable</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                        width="80px"
                           src="https://decorapro-wp.s3.amazonaws.com/2023/01/persianas-shangri-la-decoracion.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Triple Shade</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/SHEER-traslucida-decora-pro.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Sheer Traslúcida</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/SHEER-blacka-out-decora-pro.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Sheer Blackout</h3>
                    </a>
                    <a class="sub_cat__box" href="/persianas/products?color=&Categorias=Triple+Shade">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/persianas-shangri-la-decoracion.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Triple Shade</h3>
                    </a>

                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/persiana-madera-decora-pro.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Madera</h3>
                    </a>
                </div>
            </div>

            <div class="sub_cat">
                <h2 class="sub_cat__title">Fabrica con nosotros</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid-uno margen">
                    <a class="" href="http://">
                        <img
                        width="80%"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Final-fabrica-de-persianas.webp"
                            alt="Papel Tapiz CDMX"
                        />


                    </a>
                    <p>Enviamos a todo México</p>

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
                        <li><a href="{{route('persianas')}}">Percianas Modernas</a></li>
                        <li><a href="http://">Percianas Electricas</a></li>
                        <li><a href="{{route('cortinas')}}">Cortinas Modernas</a></li>
                        <li>
                            <a href="http://"
                                >Distrivuidor de Tapiz para Pared</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="footer__menu">
                    <p>PAPEL TAPIZ</p>
                    <ul class="footer__list">
                        <li><a href="">Texturizado</a></li>
                        <li><a href="">Ladrillo</a></li>
                        <li><a href="">Geometrico</a></li>
                        <li><a href="">Flores</a></li>
                        <li><a href="">Marmol</a></li>
                        <li><a href="">Plantas</a></li>
                        <li><a href="">Tapiz para Pared</a></li>
                    </ul>
                </div>
                <div class="footer__menu">
                    <p>PERSIANAS</p>
                    <ul class="footer__list">
                        <li><a href="">Modernas</a></li>
                        <li><a href="">Enrollables</a></li>
                        <li><a href="">Blackout</a></li>
                        <li><a href="">Electricas</a></li>
                        <li><a href="">Sheer Elegance</a></li>
                    </ul>
                </div>
                <div class="footer__menu">
                    <p>CONTACTO</p>
                    <ul class="footer__list">
                        <li>
                            <i class="fa-regular fa-clock"></i><a href=""
                                >Lunes a Viernes 9:00AM - 7:00PM</a
                            >
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i><a href=""
                                >(55) 5680-5178</a>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp"></i>
                            <a href=""
                                >(55) 7902-2386</a
                            >
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i><a href=""
                                >contacto@decorapro.mx </a
                            >
                        </li>
                    </ul>
                    <p>visitanos</p>

                    <ul class="footer__list-2">
                        <li>
                            <i class="fa-brands fa-facebook"></i><a href=""
                                ></a
                            >
                        </li>
                        <li>
                            <i class="fa-brands fa-instagram"></i><a href=""
                                ></a>
                        </li>
                        <li>
                            <i class="fa-brands fa-youtube"></i>
                            <a href=""
                                ></a
                            >
                        </li>
                        <li>
                            <i class="fa-brands fa-pinterest"></i><a href=""
                                > </a
                            >
                        </li>
                    </ul>

                    </div>
                    <div class="footer--sub footer--sub-3">
                        <p>¿Tienes DUDAS?</p>
                        <form class="footer__from " action="" >
                            <input type="text" placeholder="Nombre" />
                            <div class="fotter-div-thwo-form">
                                <input type="text" placeholder="Teléfono" name="" id="" />
                                <input type="email" placeholder="Correo Electrónico" />
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
                                placeholder="Escribe tu consulta"
                            ></textarea>
                            <input type="submit" value="Enviar" />
                        </form>
                    </div>
                </div>
                <div class="footer--sub footer--sub-2">
                    <p>¿Tienes DUDAS?</p>
                    <form class="footer__from" action="" >
                        <input type="text" placeholder="Nombre" />
                        <div class="form-inter-d fotter-div-thwo-form">
                            <input type="text" placeholder="Teléfono" name="" id="" />
                            <input type="email" placeholder="Correo Electrónico" />
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
                            placeholder="Escribe tu consulta"
                        ></textarea>
                        <input type="submit" value="Enviar" />
                    </form>
                </div>
            <div class="footer--gris">
                <div class="footer__contenedor">
                   <a href="/politicas-de-privacidad"> <p>Politicas de Privacidad</p></a>
                   <a href="/terminos-del-servicio"> <p>Términos del Servicio</p></a>
                  <a href="/politica-de-reembolso">  <p>Politicas de Reembolso</p></a>
                </div>
            </div>
        </footer>

        <script>
            function toggleMenu() {
                document.querySelector('.menu').classList.toggle('open');
            }
            function closeMenu() {
            document.querySelector('.menu').classList.remove('open');
                        }
        </script>

    </body>
</html>
