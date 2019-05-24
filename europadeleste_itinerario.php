<!doctype html>
<html lang="en" ng-app="omtourApp">
<?php 
    include 'header.php';
?>
<body ng-controller="mainController as main">
    <div class="wrapper" ng-controller="itinerarioController">
        <?php 
            include 'menu-negro.php';
        ?>
        <?php 
            include 'wsp.php';
        ?>
        <section id="itinerario">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="omtour-title regular text-center grey">Itinerario de viaje</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="itinerario-img">
                            <img src="img/itinerario-europa-del-este.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                      <div id="accordion" data-aos="fade-right">
                        <div class="card" ng-repeat="itinerario in itinerario_europaDelEste">
                          <div class="card-header" id="heading-{{$index}}">
                            <h5 class="mb-0">
                              <button class="btn btn-link bold grey" data-toggle="collapse" data-target="#collapse-{{$index}}" aria-expanded="false" aria-controls="collapse-{{$index}}">
                              <i class="fas fa-angle-down"></i> {{itinerario.dia}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapse-{{$index}}" class="collapse" aria-labelledby="heading-{{$index}}" data-parent="#accordion">
                            <div class="card-body regular grey">
                            {{itinerario.plan}}
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="row" id="descarga-itinerario-wrapper" data-aos="fade-left">
                  <div class="col-12 col-sm-6">
                      <a href="itinerarios/Itinerario_Europa_del_Este.pdf" class="btn btn-block btn-itinerario light" target="_blank">Descarga aquí el itinerario</a>
                  </div>
                </div>
            </div>
        </section>
        <section id="hoteles">
          <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="omtour-title regular text-center grey">Hoteles Previstos o similar</h3>
                </div>
            </div>
            <div class="hotel-wrapper">
              <div class="row" ng-repeat="hotel in hoteles__europaDelEste">
                <div class="col-6">
                    <div class="bold ciudad text-right">{{hotel.ciudad}}</div>
                </div>
                <div class="col-6">
                  <div class="regular">{{hotel.hotel}}</div>
                </div>
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
                        <div class="reserva-text regular">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde quae 
                        </div>
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
        <div id="pre-footer">
            <div id="carouselExperience" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/leyenda-inicial-1.jpg" alt="First slide">
                         <div class="carousel-caption d-md-block">
                            <h5 class="light">Creamos las mejores experiencias de Viajes para ti!</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/leyenda-inicial-2.jpg" alt="Second slide">
                         <div class="carousel-caption d-md-block">
                            <h5 class="light">Creamos las mejores experiencias de Viajes para ti!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include 'footer.php';
    ?>
    <?php 
        include 'modal_terminos_eue.php';
    ?>
</body>
</html>