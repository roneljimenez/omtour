<?php /* Template Name: Itinerario */ ?>

<!doctype html>
<html lang="en" ng-app="omtourApp">
    <?php 
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

            endwhile; 
        ?>
    </div>
    <?php 
       get_footer(); 
    ?>
</body>
</html>