<?php
$to_email_address = 'viajes@omtour.cl';
$subject = 'Formulario de Consulta';
$message = 'Has recibido la consulta de Nombre:'.$_POST['nombre'].' Email:'.$_POST['email'].' Telefono:'.$_POST['telefono'].' Comentario:'.$_POST['comentario'];
$headers = 'From: contacto@omtour.cl';

mail($to_email_address,$subject,$message,$headers);
?>

<html>
<meta http-equiv="refresh" content="1;url=index.php"> 
</html>