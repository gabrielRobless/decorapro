<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        @vite('resources/css/normalize.css') @vite('resources/css/app.css')
        @vite('resources/js/main.js')
    </head>
    <body>
        <header class="header">
            <div class="header__contenedor">
                <div class="header__logo"><a href="{{route('Inicio')}}">
                    <img
                        src="https://decorapro.mx/wp-content/uploads/2023/01/Decora-Pro-logo-Horizontal-verde-1-2.png"
                        alt="Logo Decora Pro"
                    /></a>
                </div>
                <nav class="header__nav">
                    <ul>
                        <li class="papeltapiz" ><a href="{{route('papelt')  }}">Papel Tapiz</a></li>
                        <li class="persianas"><a href="{{route('persianas')}}">Persianas</a></li>
                        <li><a href="{{route('cortinas')}}">Cortinas</a></li>
                        <li><a href="#">Automatización</a></li>
                        <li><a href="#">Quiero ser Distribuidor</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="inactivo  sub_papel__contenedor">
            <div class="sub_cat">
                <h2 class="sub_cat__title">Papel Tapiz de Entrega inmediata</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid">
                    <a class="sub_cat__box" href="http://">
                        <img
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Paradise-1.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Paradise</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Art-Deco-1.webp"
                            alt="Papel Tapiz art Deco"
                        />

                        <h3 class="sub_cat__namecol">Art Deco</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Narura-1.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Exquisite</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                        width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/1._Classic_Rhomb_Azul_572961-6.png"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Flawless</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/09/shine-923207.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Shine</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/khroma-1.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Paradise</h3>
                    </a>
                </div>
            </div>
            <div class="sub_cat">
                <h2 class="sub_cat__title">Modelos Nuevos</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid">
                    <a class="sub_cat__box" href="http://">
                        <img
                        width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Arte-1.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Arte</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Luxury-1.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Jewel</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                           src="https://decorapro-wp.s3.amazonaws.com/2024/01/296517-TOKUSHIMA-GARDEN-SUNSET.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Emil & Hugo</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/09/shine-923207.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Shine</h3>
                    </a>


                </div>
            </div>
            <div class="sub_cat">
                <h2 class="sub_cat__title">Papel Tapiz de Entrega inmediata</h2>
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

                        <h3 class="sub_cat__namecol">Infaltil</h3>
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
                    <a class="sub_cat__box" href="http://">
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
                           src="https://decorapro-wp.s3.amazonaws.com/2023/01/Persiana-Triple-shade-decora-pro.webp"
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
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/PERSIANA-CELULAR-DECORA-PRO.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Triple Shade</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/aluminio-decora-pro.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Aluminio</h3>
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
                <h2 class="sub_cat__title">Modelos Populares</h2>
                <div class="green__line"></div>
                <div class="sub_cat__grid-uno ">
                    <a class="sub_cat__box" href="http://">
                        <img
                        width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Bimini-Blackout-White.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Blackout Bimini White</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                            src="https://decorapro-wp.s3.amazonaws.com/2023/01/Sheer-Premier-Pearl-grey.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Sheer Traslúcida  Premiere Grey</h3>
                    </a>
                    <a class="sub_cat__box" href="http://">
                        <img
                            width="80px"
                           src="https://decorapro-wp.s3.amazonaws.com/2023/01/Sheer-Premier-Dim-Out-Brown.webp"
                            alt="Papel Tapiz CDMX"
                        />

                        <h3 class="sub_cat__namecol">Sheer Blackout  Premiere Brown</h3>
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
                        <li><a href="http://">Papel Tapiz CDMX</a></li>
                        <li><a href="http://">Percianas Modernas</a></li>
                        <li><a href="http://">Percianas Electricas</a></li>
                        <li><a href="http://">Cortinas Modernas</a></li>
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
                            <img src="" alt="" /><a href=""
                                >Lunes a Viernes 9:00AM - 7:00PM</a
                            >
                        </li>
                        <li>
                            <img src="" alt="" /><a href=""
                                >Lunes a Viernes 9:00AM - 7:00PM</a
                            >
                        </li>
                        <li>
                            <img src="" alt="" /><a href=""
                                >contacto@decorapro.mx - 7:00PM</a
                            >
                        </li>
                    </ul>
                    <p>visitanos</p>
                    <li>
                        <a href=""><img src="" alt="" /></a>
                    </li>
                    <li>
                        <a href=""><img src="" alt="" /></a>
                    </li>
                    <li>
                        <a href=""><img src="" alt="" /></a>
                    </li>
                    <li>
                        <a href=""><img src="" alt="" /></a>
                    </li>
                </div>
                <div class="footer--sub">
                    <p>¿Tienes DUDAS?</p>
                    <form class="footer__from" action="">
                        <input type="text" placeholder="Nombre" />
                        <input type="number" name="" id="" />
                        <input type="email" placeholder="Correo Electrónico" />
                        <select name="" id=""></select>
                        <textarea
                            name=""
                            id=""
                            cols="20"
                            rows="5"
                            placeholder="Escribe tu consulta"
                        ></textarea>
                        <input type="submit" value="Enviar" />
                    </form>
                </div>
            </div>
            <div class="footer--gris">
                <div class="footer__contenedor">
                    <p>Politicas de Privacidad</p>
                    <p>Términos del Servicio</p>
                    <p>Politicas de Reembolso</p>
                </div>
            </div>
        </footer>
    </body>
</html>
