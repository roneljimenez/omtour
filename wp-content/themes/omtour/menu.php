<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navigation-menu" id="nav-menu">
    <div class="container-fluid">
        <a class="navbar-brand col-sm-3 col-5" href="index.php">
            <img src="<?php bloginfo( 'template_url' )?>/img/logo-omtour.svg" alt="Omtour-logo" id="logo-header-img-white" class="logo-white">
            <img src="<?php bloginfo( 'template_url' )?>/img/logo-omtour-negro.svg" alt="Omtour-logo" id="logo-header-img-black" class="logo-black">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <?php
            // wp_nav_menu( array(
            //     'theme_location' => 'top',
            //     'container'=> 'div',
            //     'container_class' => 'collapse navbar-collapse col-sm-9 menu-font',
            //     'container_id' => 'navbarResponsive',
            //     'menu_class' => 'navbar-nav col-12',
            // ));
            $items = wp_get_nav_menu_items('Principal');
            if( !empty( $items ) ):?>

                <div class="collapse navbar-collapse col-sm-9 menu-font" id="navbarResponsive">
                    <ul class="navbar-nav col-12">
                        <?php foreach ( $items as $item ): ?>
                            <li class="nav-item col">
                                <a class="nav-link" href="<?php echo $item->url; ?>"><?php echo $item->title; ?>
                                </a>
                            </li>
                        <?php endforeach?>
                        <li class="nav-item col-12 col-sm-1">
                            <a class="nav-link" href="https://www.facebook.com/agenciaomtour"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item col-12 col-sm-1">
                            <a class="nav-link" href="https://www.instagram.com/agenciaomtour/"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            <?php endif?>
        <!-- <div class="collapse navbar-collapse col-sm-9 menu-font" id="navbarResponsive">
            <ul class="navbar-nav col-12">
                <li class="nav-item col">
                    <a class="nav-link" href="quienessomos.php">Quienes Somos
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link" href="index.php#travel-carousel" du-smooth-scroll du-scrollspy>Viajes Omtour</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link" href="index.php#tipos-de-viaje" du-smooth-scroll du-scrollspy>Tipos de Viajes</a>
                </li>
                <li class="nav-item col">
                    <a id="contact" class="nav-link" href="index.php#contacto" du-smooth-scroll du-scrollspy>Contacto</a>
                </li>
                <li class="nav-item col-12 col-sm-1">
                    <a class="nav-link" href="https://www.facebook.com/agenciaomtour"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item col-12 col-sm-1">
                    <a class="nav-link" href="https://www.instagram.com/agenciaomtour/"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div> -->
    </div>
</nav>