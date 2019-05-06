<!doctype html>
<html lang="en" ng-app="omtourApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Omtour - Mas que un viaje, una experiencia</title>

    <link href="https://fonts.googleapis.com/css?family=Hind:300,400|Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css?v=0.5"></link>
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139603439-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-139603439-1');
    </script>
</head>
<body ng-controller="mainController as main">
    <div class="wrapper">
        <?php 
            include 'menu.php';
        ?>
        <h3>Felicitaciones!</h3>
        <p>Acabas de comprar una experiencia inolvidable.</p>
        <p>Envìanos el comprobante de tu compra a nuestro correo electrónico: contaco@omtour.cl con el Asunto: Tipo de viaje:</p>
    </div>
    <?php 
        include 'footer.php';
    ?>
</body>
</html>