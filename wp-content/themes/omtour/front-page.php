<!doctype html>
<html <?php language_attributes()?> ng-app="omtourApp">
    <?php 
        // include 'header.php';
        get_header();
    ?>
    <body ng-controller="mainController as main">
        <div class="wrapper">
            <?php 
                include 'menu.php';
            ?>
            <?php 
                include 'wsp.php';
            ?>

                <?php
                while ( have_posts() ) : the_post();

                    the_content();

                endwhile; ?>
        </div>
        <?php 
            // include 'footer.php';
            get_footer();
        ?>
    </body>
</html>