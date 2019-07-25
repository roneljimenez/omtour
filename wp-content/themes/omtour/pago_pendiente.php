<!doctype html>
<html lang="en" ng-app="omtourApp">
<?php 
    include 'header.php';
?>
<body ng-controller="mainController as main">
    <div id="pago_exitoso">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="mensaje text-center">
                            <img src="img/logo_pago_exitoso.svg" alt="">
                            <h3 class="">Estamos esperando!</h3>
                            <p>Tu pago está en proceso de revisión</p>
                            <p>Envìanos el comprobante de tu compra a nuestro correo electrónico: contaco@omtour.cl</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            include 'footer.php';
        ?>
    </div>
</body>
</html>