<?php 
    $destino = "biancapucciano@gmail.com";
    $subject = "Consulta desde www.sagradamadre.com.ar";
    $mensaje = "Nombre y Apellido: " . $_POST["nombre"] . " " . $_POST["apellido"];
    $mensaje .= "EMAIL: " . $_POST["email"];
    $mensaje .= "Comentario: " . $_POST["comentario"];

    mail($destino, $subject, $mensaje);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Muchas Gracias</title>
</head>
<body>
    <h1 class="h1php">¡Muchas gracias <?php echo $_POST["nombre"] . " " . $_POST["apellido"];?> por enviarnos su consulta!</h1>
    <h2 class="h2php">Su mail ha sido enviado con éxito.</h2>
    <h2 class="h2php">Su respuesta será enviada a: <?php echo $_POST["email"];?></h2>
    <p class="tuconsulta">Tu consulta: <?php echo $_POST["comentario"];?></p>
</body>
</html>