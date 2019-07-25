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
                            <img src="<?php bloginfo( 'template_url' )?>/img/viajes-a-la-medida-y-quienes-somos-.jpg" class="w-100 desktop" alt="Más que un viaje, una experiencia- slider 1">
                            <img src="<?php bloginfo( 'template_url' )?>/img/viajes-a-la-medida-y-quienes-somos-movil.jpg" class="w-100 movil" alt="Más que un viaje, una experiencia-slider 1">
                            <div class="carousel-caption d-md-block">
                                <h5>Quienes Somos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                while(have_posts()) : the_post();
            ?>

                <section id="quienes-somos">
                <div class="container">
                    <div class="row text-center">
                        <img src="<?php bloginfo( 'template_url' )?>/img/quienes-somos-header.png" alt="">
                    </div>
                    <div class="row">
                        <div id="quienes-somos-text" class="text-center regular grey">
                                <?php the_content()?>
                        </div>
                    </div>
                    <div class="row text-center">
                        <img src="<?php bloginfo( 'template_url' )?>/img/quienes-somos-footer.png" alt="">
                    </div>
                </div>

            </section>
            <?php 
                endwhile;
            ?>
            <?php 
                include 'pre-footer.php';
            ?>
        </div>
        <?php 
            include 'footer.php';
        ?>
    </body>
</html>