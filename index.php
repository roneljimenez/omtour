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
        <div id="banner-carousel">
            <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/mundo.jpg" class="w-100 desktop" alt="Más que un viaje, una experiencia- slider 1">
                        <img src="img/banner-responsive.png" class="w-100 movil" alt="Más que un viaje, una experiencia- slider 1">
                        <div class="carousel-caption d-md-block">
                            <h5>Más que un viaje, una experiencia</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/praga.jpg" class="w-100 desktop" alt="Más que un viaje, una experiencia- slider 2">
                        <img src="img/banner2-responsive.png" class="w-100 movil" alt="Más que un viaje, una experiencia- slider 1">
                        <div class="carousel-caption d-md-block">
                            <h5>Más que un viaje, una experiencia</h5>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div> -->
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
                    <img id="logo-header" src="img/OMTOUR-travel-logo.png"></img>
                    <h3 class="omtour-title regular">Próximas experiencias</h3>
                </div>
                <div id="travel-carousel-slider">
                    <div id="slider-travel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="img/Vienna.png" alt="First slide">
                            <div id="travel-carousel-footer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="bold destiny-travel">Europa del Este</h4>
                                                <p class="m-0 regular date-travel">10 al 20 de Agosto</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="m-0 regular" ><span class="cupos semi-bold">15</span> cupos disponibles</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="travel-price semi-bold">$450.000*</h4>
                                                <p class="m-0 regular" style="font-size: 11px; letter-spacing:1px;">Por pasajero, todo incluido.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/Vienna.png" alt="First slide">
                            <div id="travel-carousel-footer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="bold destiny-travel">Europa del Este</h4>
                                                <p class="m-0 regular date-travel">10 al 20 de Agosto</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="m-0" ><span class="cupos">15</span> cupos disponibles</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="travel-price">$450.000*</h4>
                                                <p class="m-0" style="font-size: 11px;">Por pasajero, todo incluido.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
            </div>
            <div id="video-footer" class="light">
               <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ex perspiciatis molestiae, incidunt reprehenderit ducimus aperiam, vitae quae laudantium ullam eos ea libero! Est iure suscipit maxime odit, labore iusto.</p>
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
                                <!-- <div class="trip-logo">
                                    <img src="img/omtour-trip-logo.png" alt="">
                                </div> -->
                                <div class="trip-content">
                                    <p class="light"><strong>Diseñamos y organizamos la mejor experiencia para tu empresa</strong> con un sello único, en <strong>viajes de incentivo, salidas grupales o asistencia personalizada en viajes</strong>, escríbenos y nosotros te ayudamos.</p>
                                    <p><a href="#contacto" class="trip-button regular">Más Información</a></p>
                                </div>
                                <div class="trip-footer">
                                    <img src="img/Viajes-grupales.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 trip-box p-0">
                                <div class="trip-title">
                                    <h4 class="light">Viajes Grupales</h4>
                                </div>
                                <!-- <div class="trip-logo">
                                    <img src="img/omtour-trip-logo.png" alt="">
                                </div> -->
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
                                <!-- <div class="trip-logo">
                                    <img src="img/omtour-trip-logo.png" alt="">
                                </div> -->
                                <div class="trip-content">
                                    <p class="light">Si estas buscando ese viaje especial, sol@, en pareja o en familia, y tener una <strong>experiencia única</strong> de esas  <strong>vacaciones anheladas</strong>, aquí tienes la respuesta. Te <strong>ofrecemos nuestra asesoría y productos</strong> para diseñar <strong> viaje a la medida.</strong></p>
                                    <p><a href="#contacto" class="trip-button regular">Más Información</a></p>
                                </div>
                                <div class="trip-footer">
                                    <img src="img/Viajes-grupales.png" alt="">
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
                <div class="row form-group">
                    <div class="col">
                        <input type="text" class="form-control light" placeholder="Nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control light" placeholder="Email">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control light" placeholder="Telefono">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-8">
                        <input type="text" class="form-control light" placeholder="Comentario">
                    </div>
                    <div class="col-sm-4">
                        <div class="button-container">
                            <button type="submit" class="contacto-button light">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pre-footer">
            <p class="light">Creamos las mejores experiencias de viajes para ti!</p>
        </div>
    </div>
    <?php 
        include 'footer.php';
    ?>
</body>
</html>