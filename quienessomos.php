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
                            <img src="img/viajes-a-la-medida-y-quienes-somos-.jpg" class="w-100 desktop" alt="Más que un viaje, una experiencia- slider 1">
                            <img src="img/viajes-a-la-medida-y-quienes-somos-movil.jpg" class="w-100 movil" alt="Más que un viaje, una experiencia-slider 1">
                            <div class="carousel-caption d-md-block">
                                <h5>Quienes Somos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="quienes-somos">
                <div class="container">
                    <div class="row text-center">
                        <img src="img/quienes-somos-header.png" alt="">
                    </div>
                    <div class="row">
                        <div id="quienes-somos-text" class="text-center regular grey">
                           <p> Somos una agencia de viajes y tour operador, que comenzó con el sueño de dos profesionales de turismo, y su amplia experienca en viajes grupales a destinos internacionales, recorriendo distintos países en Sudamérica, Europa, Asia y Oceanía.</p>
                           <p>Más que ofrecer viajes, ofrecemos experiencias,que comienzan antes que te subas al avión. Te asesoramos de manera personalizada y con un sello familiar, previo, durante y después de tu aventura, para poder ayudarte a cumplir ese sueño de recorrer y conocer nuevas culturas, compartir con gente local, comer platos típicos, en situaciones nuevas y diferentes.</p>
                           <p>Una experiencia distinta donde te invitamos a vivirla junto a nosotros.</p>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div id="perfil-wrapper">
                            <img class="perfil-img" src="img/perfil_quienes_somos.jpg" alt="">
                        </div>
                    </div>
                    <div class="row text-center">
                        <img src="img/quienes-somos-footer.png" alt="">
                    </div>
                </div>

            </section>
            <section id="disfruta" data-aos="zoom-in">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php 
                                include 'carousel_Marruecos.php';
                            ?>
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
    </body>
</html>