<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Alcaldía de Guatajiagua</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Alcaldía Guatajiagua, Guatajiagua, información de Guatajiagua, Guatajiagua Municipio" name="keywords">
    <meta
        content="Guatajiagua es un municipio del departamento de Morazán en El Salvador. Limita al norte con Yamabal y Ciudad Barrios; al este con Yamabal; al sur con San Miguel y Chapeltique y al oeste con Ciudad Barrios y Chapeltique."
        name="description">

    <!-- Iconos -->
    <link href="{{ asset('plt/img/logG.png') }}" rel="icon">
    <link href="{{ asset('plt/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fuentes -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('plt/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Librerias CSS  -->
    <link href="{{ asset('plt/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plt/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plt/lib/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('plt/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Estilos-->
    <link href="{{ asset('plt/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <div class="load">
        <div class="loader_bg">
            <div class="loader">
            </div>
        </div>
    </div>

    @if (Route::has('login'))

        <!--========================== Header ============================-->
        <header id="header">
            <div class="container">

                <div id="logo" class="pull-left">
                    <a href="https://www.transparencia.gob.sv/institutions/alc-guatajiagua" class="scrollto"
                        target="_black"><img src="{{ asset('plt/img/pt.png') }}" alt="" title=""></a>
                </div>
                <!-- Comienza Menú-->
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.html">Alcaldía</a>
                        </li>
                        <li><a href="#">Servicios</a>
                        </li>
                        <li><a href="#">Municipalidad</a></li>
                        <li><a href="#">Transparencia</a></li>
                        <li><a href="#">Contacto</a></li>
                        @auth
                            <li class="buy-tickets"><a href="{{ url('/home') }}">Dashboard</a></li>
                        @else
                            <li class="buy-tickets"><a href="{{ route('login') }}">Iniciar Sesión</a></li>

                            @if (Route::has('register'))
                                <!--<a href="{{ route('register') }}"
                                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>-->
                            @endif
                        @endauth


                    </ul>
                </nav>
                <!-- Termina Menú-->
            </div>
        </header>

        <!--==========================
    Intro Section
  ============================-->
        <section id="intro">
            <div class="intro-container wow fadeIn">
                <h1 class="mb-4 pb-0">INNOVANDO POR UNA<br><span> MEJOR</span> CIUDAD</h1>
                <p class="mb-4 pb-0">Barrio el Centro, Guatajiagua, Morazán, El Salvador</p>
                <a href="https://youtu.be/Y_E6lGqyyw4" class="venobox play-btn mb-4" data-vbtype="video"
                    data-autoplay="true"></a>
                <a href="#" class="about-btn scrollto">Contactate con nosotros</a>
            </div>
        </section>

        <main id="main">

            <!--==========================
      About Section
    ============================-->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <h3>¿Quiénes somos?</h3>
                            <p style="text-align: justify;">Somos personas comprometidas con el progreso de nuestro
                                municipio, trabajando arduamente por un lugar que sea de todos y para todos,
                                desarrollando
                                múltiples alternativas para buscar darle la atención que usted y su familia se merece.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <h3>Misión</h3>
                            <p style="text-align: justify;">Ser una Institución Pública Municipal responsable,
                                transparente,
                                eficiente y eficaz en la prestación de Servicios Municipales, promoviendo la
                                participación
                                ciudadana para el desarrollo económico, social, y cultural de nuestro municipio.</p>
                        </div>
                        <div class="col-lg-4">
                            <h3>Visión</h3>
                            <p style="text-align: justify;">Ser una entidad Municipal líder, autosostenible,
                                independiente,
                                moderna y representativa de las comunidades que la conforman, fortalecida en su
                                capacidad de
                                gestión y en la prestación de los servicios municipales para el bien común local.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==========================
      Speakers Section
    ============================-->
            <br>
            <section id="speakers" class="wow fadeInUp">
                <div class="container">
                    <h3 class="ch3 text-center">¡Guatajiagua tu ciudad!</h3>
                    <p class="text-justify" style="font-size: 17px;">
                        Agrega un nuevo destino a tu lista de viaje, conoce Guatajiagua y todo lo que tiene por
                        ofrecerte,
                        amanece con el canto de las aves que sobrevuelan el cielo de nuestro Municipio, despierta y
                        sigue
                        viajando por los paradisiacos recorridos y rutas que están esperando a ser conquistados por ti,
                        todo
                        para que vivas una nueva aventura en un ambiente donde la armonía entre la naturaleza con los
                        pueblos sea una realidad, donde puedes disfrutar de nuestras costumbres y tradiciones, a la vez
                        que
                        te detienes a escuchar las historias que cada uno de nuestros habitantes tiene por contarte.
                        Guatajiagua sin duda es un destino único como cualquier otro, un lugar donde esperamos que te
                        sorprendas con nuestras raíces culturales y que vivas esa experiencia fascinante que te haga
                        conectarte con nuestros antepasados, conociendo las actividades que nos hacen sobresalir como
                        pueblo
                        turístico, eso es sin lugar a dudas nuestra especialidad en el comercio y la elaboración de
                        obras
                        artesanales, producto de las manos de nuestros artesanos experimentados, que con mucha pasión y
                        cuidado desarrollan cada detalle de sus trabajos en el área de la manufactura del barro negro y
                        sus
                        derivados…
                        <br>
                        Guatajiagua es una población con raíces Lenca–Poton Precolombina, ubicada en la zona oriental de
                        El
                        Salvador, a una distancia de 146 Km de San Salvador; Curiosamente para algunas personas su
                        nombre
                        significaba “Guacales con agua” o “culebras con agua”, pero al retomar su etimología Lenca nos
                        daremos cuenta que está constituida de las siguientes raíces: Igüa = tabaco; ta = cultivo; yagua
                        =
                        valle, por lo tanto su significado recae en “valle con cultivos de tabaco” o “cerro de tabaco”.
                        Según testimonios de algunos habitantes de la comunidad, el nombre Guatajiagua, ha presentado
                        diferentes pronunciaciones y escrituras, así como: Guatalia, Guatoxia, Guatanyiba y Guataxiagi,
                        pero
                        de ninguna manera se sabía su significado de “valle con cultivos de tabaco”. Con respecto a los
                        datos históricos de la población de Guatajiagua, se puede mencionar que obtuvo su título de
                        villa
                        por decreto legislativo el 07 de Abril de 1905, ampliando así considerablemente su desarrollo,
                        hasta
                        recibir el 13 de Agosto de 1928 su título de ciudad; Nuestras fiestas patronales se celebran del
                        17
                        al 21 de enero en honor a San Sebastián Mártir y los lugares recomendados a visitar para el
                        turismo
                        en este municipio son la industria alfarera y de productos lácteos, la Poza El Salto, la piedra
                        en
                        balanza, rio Los Amates, entre otros.


                        <!--Guatajiagua es una población Lenca – Poton precolombina, ubicada en la zona oriental de El Salvador, a una distancia de 146 Km de San Salvador; Para algunas personas en un principio su nombre significaba “Guacales con agua o culebras con agua”; Pero al retomar su etimología Lenca está constituida de las siguientes raíces: Igüa = tabaco; ta = cultivo; yagua = valle, por lo tanto su significado es “valle con cultivos de tabaco”, o “cerro de tabaco”. Según testimonios de algunos habitantes de la comunidad, el nombre Guatajiagua, ha presentado diferentes pronunciaciones y escrituras, así como: Guatalia, Guatoxia, Guatanyiba y Guataxiagi, pero de ninguna manera se sabía su significación “valle con cultivos de tabaco”. La población de Guatajiagua obtuvo su título de villa por decreto legislativo el 07 de Abril de 1905, ampliando considerablemente su desarrollo, hasta recibir el 13 de Agosto  de 1928 su título de ciudad.
        <br>Nuestras fiestas patronales se celebran del 17 al 21 de enero en honor a San Sebastián Mártir y con respecto a algunos lugares recomendados a visitar en este municipio son la industria alfarera y de productos lácteos, la Poza El Salto, etc…
        -->

                    </p>
            </section>
            <br>

            <!--==========================
      Venue Section
    ============================-->
            <section id="venue" class="wow fadeInUp">

                <div class="container-fluid">



                    <div class="row no-gutters">
                        <div class="col-lg-6 venue-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.5538062339715!2d-88.21141663568913!3d13.66476730298718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfedbda7cb7333da2!2sAlcald%C3%ADa%20Municipal%20de%20Guatajiagua!5e1!3m2!1ses!2ssv!4v1601249707551!5m2!1ses!2ssv"
                                frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <div class="col-lg-6 venue-info">
                            <div class="row justify-content-center">
                                <div class="col-11 col-lg-8">
                                    <h3 class="text-center">Administración de Guatajiagua</h3>
                                    <p class="text-justify">Para su administración Guatajiagua se encuentra dividido en
                                        6
                                        cantones y 35 caseríos. Siendo sus cantones: Abelines, Cirigual, Maiguera,
                                        Pajigua,
                                        San Bartolo y El Volcán. Y en el área urbana con 4 barrios (Barrio de Arriba,
                                        Barrio
                                        El Centro, Barrio La Cruz y Barrio El Calvario).</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>

                <div class="container-fluid venue-gallery-container">
                    <div class="row no-gutters">

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="{{ asset('plt/img/pictures/futbol.JPG') }}" class="venobox"
                                    data-gall="venue-gallery">
                                    <img src="{{ asset('plt/img/pictures/futbol.JPG') }}" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="{{ asset('plt/img/pictures/DSC_0216.JPG') }}" class="venobox"
                                    data-gall="venue-gallery">
                                    <img src="{{ asset('plt/img/pictures/DSC_0216.JPG') }}" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="{{ asset('plt/img/pictures/DSC_0287.JPG') }}" class="venobox"
                                    data-gall="venue-gallery">
                                    <img src="{{ asset('plt/img/pictures/DSC_0287.JPG') }}" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="{{ asset('plt/img/pictures/gi1.png') }}" class="venobox"
                                    data-gall="venue-gallery">
                                    <img src="{{ asset('plt/img/pictures/gi1.png') }}" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="{{ asset('plt/img/pictures/l1.JPG') }}" class="venobox"
                                    data-gall="venue-gallery">
                                    <img src="{{ asset('plt/img/pictures/l1.JPG') }}" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="{{ asset('plt/img/pictures/gi2.png') }}" class="venobox"
                                    data-gall="venue-gallery">
                                    <img src="{{ asset('plt/img/pictures/gi2.png') }}" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="{{ asset('plt/img/pictures/gi3.png') }}" class="venobox"
                                    data-gall="venue-gallery">
                                    <img src="{{ asset('plt/img/pictures/gi3.png') }}" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="{{ asset('plt/img/pictures/gi4.png') }}" class="venobox"
                                    data-gall="venue-gallery">
                                    <img src="{{ asset('plt/img/pictures/gi4.png') }}" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </section>


            <!--==========================
      Subscribe Section
    ============================-->
            <section id="subscribe">
                <div class="container wow fadeInUp">
                    <div class="section-header">
                        <h2>¡Suscríbete al portal de noticias!</h2>
                        <b>
                            <p>Suscríbete e infórmate de las noticias de nuestra ciudad.</p>
                        </b>
                    </div>

                    <form method="POST" action="sub.php">
                        <div class="form-row justify-content-center">
                            <div class="col-auto">
                                <input type="text" class="form-control text-center" name="sub"
                                    placeholder="Ingrese su correo electronico">
                            </div>
                            <div class="col-auto">
                                <button type="submit"> Suscribirse </button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>

            </section>

            <!--==========================
      alc_det Sección
    ============================-->
            <section id="alc_det" class="section-with-bg wow fadeInUp">

                <div class="container" id="d3">

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="det">
                                <br>
                                <div class="det-img">
                                    <center><img src="{{ asset('plt/img/us.png') }}" class="img-fluid"
                                            width="150" height="210">
                                    </center>
                                </div>
                                <center>
                                    <h2 style="font-weight: bold;"><a href="{{ asset('plt/doc/derechos.pdf') }}"
                                            target="_blank">Derechos</a></h2>
                                </center>

                                <p style="text-align: justify;">Como parte de nuestra política de atención a la
                                    ciudadanía,
                                    contemplamos una serie de guías para que pueda conocer cuáles son sus derechos en el
                                    margen de la utilización de los servicios de la Municipalidad.
                                </p><br>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="det">
                                <br>
                                <div class="det-img">
                                    <center><img src="{{ asset('plt/img/db.png') }}" class="img-fluid"
                                            width="160" height="225">
                                    </center>
                                </div>
                                <center>
                                    <h2 style="font-weight: bold;"><a href="{{ asset('plt/doc/deberes.pdf') }}"
                                            target="_blank">Deberes</a>
                                    </h2>
                                </center>

                                <p style="text-align: justify;">Compartimos con usted el siguiente documento para que
                                    pueda
                                    conocer los deberes que tiene que cumplir como usuario de los servicios Municipales,
                                    garantizando así una comunicación adecuada y eficiente.
                                </p><br>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="det">
                                <br>
                                <div class="det-img">
                                    <center><img src="{{ asset('plt/img/cm.png') }}" class="img-fluid"
                                            width="150" height="210">
                                    </center>
                                </div>
                                <center>
                                    <h2 style="font-weight: bold;"><a
                                            href="{{ asset('plt/img/CartaCompromiso.pdf') }}"
                                            target="_blank">Compromisos</a></h2>
                                </center>

                                <p style="text-align: justify;">Presentamos nuestros compromisos con los usuarios del
                                    Registro del Estado Familiar, reiterando los tramites que puede realizar, el precio
                                    y el
                                    tiempo de ejecución de cada actividad relacionada al registro y consulta de
                                    constancias
                                    de datos personales.
                                </p>
                            </div>
                        </div>

                    </div>

            </section>
        </main>


        <!--==========================
    Footer
  ============================-->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 footer-info">
                            <center><a href="index.html"><img src="{{ asset('plt/img/logo.png') }}"
                                        alt="Guatajiagua"></a></center>
                            <p class="text-justify">Somos un pueblo lleno de gente trabajadora, un lugar de descanso y
                                conexión con la cultura, donde puedes vivir una experiencia totalmente alejada a lo
                                habitual… ¡Descubre Guatajiagua y todo lo que tiene por ofrecerte!…</p>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Favoritos</h4>
                            <ul>
                                <li><i class="fa fa-angle-right"></i> <a
                                        href="{{ asset('plt/doc/Presup_Egresos_2020.xlsx') }}"
                                        target="_blank">Presupuesto actual</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="{{ asset('plt/doc/Sol_Inf.docx') }}"
                                        target="_blank">Solicitud de información</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="{{ asset('plt/doc/MDCC_.pdf') }}"
                                        target="_blank">Manual de
                                        escritor de cargos</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="{{ asset('plt/doc/MOF_.pdf') }}"
                                        target="_blank">Manual de
                                        organizaciones</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="{{ asset('plt/doc/LAIP.pdf') }}"
                                        target="_blank">Ley de
                                        acceso a la información</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Menú</h4>
                            <ul>
                                <li><i class="fa fa-angle-right"></i> <a href="index.html">Inicio</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="nosotros.html">Nosotros</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="galeria.html">Galería</a>
                                </li>
                                <li><i class="fa fa-angle-right"></i> <a href="transparencia.html">Transparencia</a>
                                </li>
                                <li><i class="fa fa-angle-right"></i> <a href="contacto.html">Contacto</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4 class="text-center">Contáctenos</h4>
                            <p class="ab text-center">Calle General Menéndez,Barrio El Centro,
                                Guatajiagua Morazán.
                                <br>
                                <br>
                                <strong class="text-center">Teléfono: </strong><a class="ab"
                                    href="tel:+50326586591">
                                    (+503) 2658 - 6591</a><br>
                                <strong class="text-center">Email:</strong> <a class="ab"
                                    href="mailto:uaip.alcaldiampal.guatajiagua@gmail.com">InfoGuatajiagua@gmail.com</a><br>
                            </p>

                            <center>
                                <div class="social-links">
                                    <a href="tel:+50326586591" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/Unidad-de-Comunicaciones-Alcaldia-de-Guatajiagua-104942780883268/"
                                        target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="https://goo.gl/maps/bX7hTpbDftsLDAeL6" class="instagram"
                                        target="_blank"><i class="fa fa-street-view"></i></a>
                                    <a href="mailto:uaip.alcaldiampal.guatajiagua@gmail.com" class="google-plus"><i
                                            class="fa fa-google-plus"></i></a>
                                    <a href="https://www.youtube.com/channel/UC2qQIfRg0chediAmE_fGvKw" class="youtube"
                                        target="_blank"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </center>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Alcaldía Municipal de Guatajiagua.
                </div>
                <div class="credits">

                </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.map"></script>
        <script>
            setTimeout(function() {
                $('.loader_bg').fadeToggle();

            }, 6000);
        </script>
        <script>
            setTimeout(function() {
                $('.load').fadeToggle();

            }, 6000);
        </script>
        <script src="{{ asset('plt/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('plt/lib/jquery/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('plt/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('plt/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('plt/lib/superfish/hoverIntent.js') }}"></script>
        <script src="{{ asset('plt/lib/superfish/superfish.min.js') }}"></script>
        <script src="{{ asset('plt/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('plt/lib/venobox/venobox.min.js') }}"></script>
        <script src="{{ asset('plt/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Contact Form JavaScript File -->
        <script src="{{ asset('plt/contactform/contactform.js') }}"></script>

        <!-- Template Main Javascript File -->
        <script src="{{ asset('plt/js/main.js') }}"></script>
        <script src="{{ asset('plt/js/j2.js') }}"></script>
    @endif
</body>

</html>
