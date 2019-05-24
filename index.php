<!doctype html>
<html lang="en" ng-app="omtourApp">
    <?php 
        include 'header.php';
    ?>
    <body ng-controller="mainController as main">
        <div class="wrapper">
            <?php 
                include 'menu.php';
            ?>
            <?php 
                include 'wsp.php';
            ?>
            <div id="banner-carousel">
                <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/mundo.jpg" class="w-100 desktop" alt="Más que un viaje, una experiencia- slider 1">
                            <img src="img/omtour-responsive-1.jpg" class="w-100 movil" alt="Más que un viaje, una experiencia-slider 1">
                            <div class="carousel-caption d-md-block">
                                <h5>Más que un viaje, una experiencia</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner-omtour-2.jpg" class="w-100 desktop" alt="Más que un viaje, una experiencia- slider 2">
                            <img src="img/omtour-responsive-2.jpg" class="w-100 movil" alt="Más que un viaje, una experiencia-slider 2">
                            <div class="carousel-caption d-md-block">
                                <h5>Más que un viaje, una experiencia</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner-omtour-3.jpg" class="w-100 desktop" alt="Más que un viaje, una experiencia- slider 3">
                            <img src="img/omtour-responsive-3.jpg" class="w-100 movil" alt="Más que un viaje, una experiencia-slider 3">
                            <div class="carousel-caption d-md-block">
                                <h5>Más que un viaje, una experiencia</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner-omtour-4.jpg" class="w-100 desktop" alt="Más que un viaje, una experiencia- slider 2">
                            <img src="img/omtour-responsive-4.jpg" class="w-100 movil" alt="Más que un viaje, una experiencia-slider 2">
                            <div class="carousel-caption d-md-block">
                                <h5>Más que un viaje, una experiencia</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner-omtour-5.jpg" class="w-100 desktop" alt="Más que un viaje, una experiencia- slider 5">
                            <img src="img/omtour-responsive-5.jpg" class="w-100 movil" alt="Más que un viaje, una experiencia-slider 5">
                            <div class="carousel-caption d-md-block">
                                <h5>Más que un viaje, una experiencia</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
                        <i class="fas fa-chevron-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id="travel-carousel" data-aos="fade-right">
                <div id="travel-carousel-wrapper">
                    <div id="header-travel-carousel">
                        <img id="logo-header" src="img/OMTOUR-travel-logo.png">
                        <h3 class="omtour-title regular">Próximas experiencias</h3>
                    </div>
                    <div id="travel-carousel-slider">
                        <div id="slider-travel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="europadeleste.php">
                                    <img class="w-100 desktop" src="img/omtour-europa-del-este.jpg" alt="First slide">
                                    <img class="w-100 movil" src="img/europa-del-este-movil.jpg" alt="First slide">
                                    <div id="travel-carousel-footer">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="m-0 regular" ><span class="cupos semi-bold">15</span> cupos disponibles</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="bold destiny-travel">GRAN TOUR EUROPA DEL ESTE</h4>
                                                    <p class="m-0 regular date-travel">Fechas: 4 de Oct al 21 de Octubre (18 días)</p>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                    <h4 class="travel-price semi-bold">Desde USD 5.545</h4>
                                                    <p class="m-0 regular" style="font-size: 11px; letter-spacing:1px;">(base hab. doble, por persona)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="marruecos.php">
                                        <img class="w-100 desktop" src="img/omtour-marruecos.jpg" alt="First slide">
                                        <img class="w-100 movil" src="img/Proximas-experiencias-Marruecos-movil.jpg" alt="First slide">
                                        <div id="travel-carousel-footer">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p class="m-0" ><span class="cupos semi-bold">15</span> cupos disponibles</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4 class="bold destiny-travel">ESPAÑA & MARRUECOS, MAGIA Y CULTURA</h4>
                                                        <p class="m-0 regular date-travel">Fechas: 18 de Nov al 4 de Diciembre (17 días)</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h4 class="travel-price">Desde USD 5.495</h4>
                                                        <p class="m-0" style="font-size: 11px;">(base hab. doble por persona)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider-travel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider-travel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div id="video" data-aos="fade-left">
                <div id="video-text">
                    <h3 class="omtour-title regular">Por qué viajar con nosotros</h3>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="115" src="https://www.youtube.com/embed/FubtIlK8HI4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div id="video-footer" class="light">
                <!-- <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ex perspiciatis molestiae, incidunt reprehenderit ducimus aperiam, vitae quae laudantium ullam eos ea libero! Est iure suscipit maxime odit, labore iusto.</p> -->
                </div>
            </div>
            <div id="tipos-de-viaje" data-aos="zoom-in">
                <div id="tipos-de-viaje-wrapper">
                    <div id="tipos-de-viaje-text">
                        <h3 class="omtour-title regular">Tipos de Viajes</h3>
                    </div>
                    <div id="trips-table">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 trip-box p-0">
                                    <div class="trip-title">
                                        <h4 class="light">Viajes Corporativos</h4>
                                    </div>
                                    <div class="trip-content">
                                        <p class="light"><strong>Diseñamos y organizamos la mejor experiencia para tu empresa</strong> con un sello único, en <strong>viajes de incentivo, salidas grupales o asistencia personalizada en viajes</strong>, escríbenos y nosotros te ayudamos.</p>
                                        <p><a href="#contacto" class="trip-button regular">Más Información</a></p>
                                    </div>
                                    <div class="trip-footer">
                                        <img src="img/Viajes-corporativos.jpg" alt="Omtour - viajes corporativos">
                                    </div>
                                </div>
                                <div class="col-md-4 trip-box p-0">
                                    <div class="trip-title">
                                        <h4 class="light">Viajes Grupales</h4>
                                    </div>
                                    <div class="trip-content">
                                        <p class="light">Si quieres conocer destinos únicos, nuevas culturas y paisajes incomparables, con un <strong>servicio exclusivo y personalizado.</strong> Te ofrecemos <strong>viajes de experiencia en grupo.</strong> Solo tienes que atreverte y comenzar esta aventura, <strong>nosotros te ayudamos.</strong></p>
                                        <p><a href="#contacto" class="trip-button regular">Más Información</a></p>
                                    </div>
                                    <div class="trip-footer">
                                        <img src="img/Viajes-grupales.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4 trip-box p-0">
                                    <div class="trip-title">
                                        <h4 class="light">Viajes a la Medida</h4>
                                    </div>
                                    <div class="trip-content">
                                        <p class="light">Si estas buscando ese viaje especial, sol@, en pareja o en familia, y tener una <strong>experiencia única</strong> de esas  <strong>vacaciones anheladas</strong>, aquí tienes la respuesta. Te <strong>ofrecemos nuestra asesoría y productos</strong> para diseñar <strong> viaje a la medida.</strong></p>
                                        <p><a href="#contacto" class="trip-button regular">Más Información</a></p>
                                    </div>
                                    <div class="trip-footer">
                                        <img src="img/viajes-a-la-medida-y-quienes-somos-.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contacto">
                <div id="header-contacto">
                    <h3 class="omtour-title regular">Contacto</h3>
                </div>
                <div class="formulario container">
                    <form action="sendmail.php" method="POST">
                        <div class="row form-group">
                            <div class="col-12 col-sm">
                                <input type="text" class="form-control light" placeholder="Nombre" ng-model="nombre" name="nombre">
                            </div>
                            <div class="col-12 col-sm">
                                <input type="text" class="form-control light" placeholder="Email" ng-model="email" name="email">
                            </div>
                            <div class="col-12 col-sm">
                                <input type="text" class="form-control light" placeholder="Telefono" ng-model="telefono" name="telefono">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-8">
                                <input type="text" class="form-control light" placeholder="Comentario" ng-model="comentario" name="comentario">
                            </div>
                            <div class="col-sm-4">
                                <div class="button-container">
                                    <!-- <button type="submit" class="contacto-button light" ng-click="sendMail(nombre, email, telefono, comentario)">Enviar</button> -->
                                    <button type="submit" class="contacto-button light">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php 
                include 'pre-footer.php';
            ?>
        </div>
        <?php 
            include 'footer.php';
        ?>
    </body>
</html>