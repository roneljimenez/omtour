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
                        <img src="img/europa-del-este-budapest.jpg" class="w-100 desktop" alt="Más que un viaje, una experiencia- slider 1">
                        <img src="img/europa-del-este-budapest-responsive.jpg" class="w-100 movil" alt="Más que un viaje, una experiencia- slider 1">
                        <div class="carousel-caption d-md-block">
                            <h5>Viva la experiencia en Europa del Este</h5>
                        </div>
                        <div class="carousel-subtitle">
                            <span class="bold">15</span> Cupos disponibles
                        </div>
                        <div class="carousel-text white travels">
                            <div class="left-text">
                                <h4 class="bold destiny-travel">GRAN TOUR EUROPA DEL ESTE</h4>
                                <p class="m-0 regular date-travel">Fechas: 4 de Oct al 21 de Octubre (18 días)</p>
                            </div>
                            <div class="right-text text-right">
                                <h4 class="travel-price semi-bold">Desde USD 5.545</h4>
                                <p class="m-0 regular" style="font-size: 11px; letter-spacing:1px;">(base hab. doble, por persona)</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="img/praga.jpg" class="d-block w-100" alt="Más que un viaje, una experiencia- slider 2">
                        <div class="carousel-caption d-md-block">
                            <h5>Más que un viaje, una experiencia</h5>
                        </div>
                    </div> -->
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
        <section id="prepararnos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="omtour-title regular text-center grey" data-aos="zoom-in">Vamos a prepararnos</h3>
                    </div>
                </div>
                <div class="row" data-aos="fade-right" data-aos-delay="200">
                    <div class="col-12">
                        <div class="text-box grey regular">
                            <img src="img/info-icon.svg" alt=""><span>Info General</span>
                        </div>
                        <div class="middle-border"></div>
                    </div>
                </div>
                <div class="row text-center regular grey info-list-wrapper" data-aos="fade-right" data-aos-delay="200">
                    <div class="col-md">               
                        <div>
                            <img class="info-icons" src="img/brujula-icon.svg" alt="">
                        </div>
                        <div>Guia Coordinador Omtour 24/7 durante todo el viaje y guías locales</div>
                    </div>
                    <div class="col-md"><div>
                            <img class="info-icons" src="img/plain-icon.svg" alt="">
                        </div>
                        <div>Pasajes aéreos internacionales</div></div>
                    <div class="col-md"><div>
                            <img class="info-icons" src="img/hotel-icon.svg" alt="">
                        </div>
                        <div>Hoteles 4* Superior</div></div>
                    <div class="col-md"><div>
                            <img class="info-icons" src="img/restaurant.svg" alt="">
                        </div>
                        <div>Media Pensión y una bebida incluida por comida</div></div>
                    <div class="col-md"><div>
                            <img class="info-icons" src="img/bus.svg" alt="">
                        </div>
                        <div>Transporte privado en traslados y excursiones</div></div>
                    <div class="col-md"><div>
                            <img class="info-icons" src="img/flag.svg" alt="">
                        </div>
                        <div>Principales excursiones</div></div>
                    <div class="col-md"><div>
                            <img class="info-icons" src="img/bag.svg" alt="">
                        </div>
                        <div>Asistencia de Seguro de viaje</div></div>
                </div>
                <div class="row" data-aos="fade-left" data-aos-delay="200">
                    <div class="col-12">
                        <div class="text-box grey regular">
                            <img src="img/location-icon.svg" alt=""><span>Itinerario</span>
                        </div>
                        <div class="middle-border"></div>
                    </div>
                </div>
                <div class="row regular grey info-list-wrapper" data-aos="fade-left" data-aos-delay="200">
                   <div class="col-md-5">
                       <a href="europadeleste_itinerario.php" class="btn btn-block btn-itinerario light">Revisa aqui el itinerario</a>
                   </div>
                </div>
                <div class="row" data-aos="fade-right" data-aos-delay="300">
                    <div class="col-12">
                        <div class="text-box grey regular">
                            <img src="img/creditcard-icon.svg" alt=""><span>Cómo pagar?</span>
                        </div>
                        <div class="middle-border"></div>
                    </div>
                </div>
                <div class="row regular grey info-list-wrapper" data-aos="fade-right" data-aos-delay="300">
                    <div class="col-12">Para pagar existen 3 modalidades:</div>
                    <div class="col-12">
                        <ul class="semi-bold">
                            <li>De manera presencial en nuestras oficinas, <span class="bold">tomando contacto previamente con nosotros para coordinar tu visita.</span></li>
                            <li>Vía transferencia bancaria <span class="bold">tomando contacto previamente con nosotros.</span></li>
                            <li><span class="bold">Pago online  a través de sistema webpay de manera fácil y rápida con tu tarjeta de crédito en cuotas según condiciones bancarias.<span></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="text-box grey regular" data-aos="fade-left">
                            <img src="img/warning-icon.svg" alt=""><span>Importante</span>
                        </div>
                        <div class="middle-border"></div>
                    </div>
                </div>
                <div class="row regular grey info-list-wrapper" data-aos="fade-left">
                    <div class="col-12">Es importante que leas nuestras condiciones y políticas de servicio</div>
                    <div class="col-12">
                        <ul>
                            <li>Omtour recomienda una visita médica previa al viaje.</li>
                            <li>Si necesitas alguna asistencia especial durante el viaje, como dieta o similar, nos puedes escribir para poder ayudarte.</li>
                            <li>No existen vacunas obligatorias para destino, pero puedes contactarnos para realizar las recomendaciones respectivas.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="disfruta" data-aos="zoom-in">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="omtour-title regular text-center grey">Disfruta la experiencia</h3>
                    </div>
                    <div class="col-12">
                        <?php 
                            include 'carousel_eue.php';
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="reserva" data-aos="zoom-in">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="omtour-title regular text-center grey">Preparado?</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <div class="regular grey reserva-title">Tengo dudas</div>
                        <div class="buttons-button">
                            <div class="buttons-button-img" ><i class="fas fa-envelope"></i></div>
                            <div id="click-aqui"><a class="regular grey" href="index.php#contacto">Contáctanos</a></div>
                        </div>
                        <!-- <div class="reserva-text regular">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde quae 
                        </div> -->
                    </div>
                    <div class="col">
                        <div class="regular grey reserva-title">Sí, quiero reservar</div>
                        <div class="buttons-button">
                            <!-- <img class="buttons-button-img" src="img/webpay.png" alt=""> -->
                            <!--Boton de MercadoPago usuario de prueba -->
                            <!-- <a mp-mode="dftl" href="https://www.mercadopago.com/mlc/checkout/pay?pref_id=433357739-7b765bf5-d1ab-4480-b44f-cb23ea8f5165" name="MP-payButton" class='blue-ar-l-rn-none'>Pagar</a> -->
                            <div class="buttons-button-img webpay-div" >
                                <a href="https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=3971392" class="btn btn-success webpay-btn">Pago Online</a>
                            </div>
                            <div id="click-aqui">
                                <img class="webpay-img" src="img/webpay.png" alt=""/>
                            </div>
                        </div>
                        <div class="reserva-text regular">
                            Antes de realizar la compra, debes estar de acuerdo con nuestros <a href="#" data-toggle="modal" data-target="#exampleModal">Términos y Condiciones</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
            include 'pre-footer.php';
        ?>
    </div>
    <?php 
        include 'footer.php';
    ?>
    <?php 
        include 'modal_terminos_eue.php';
    ?>
</body>
</html>