<?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $ciudad = $_POST['ciudad'];
    $pasatiempo = $_POST['pasatiempo'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="app.js"></script>
</head>                         
<body>
    <center>
    <div class="dive2">
        <h1>Resultados</h1>
        <img src="imagen.jpg" alt="Imagen de ejemplo" width="300">
        <br>
                <?php
                    echo '<p><b>nombre: </b>' . $nombre. '</p><br>';
                    echo '<p><b>edad: </b>' . $edad. '</p><br>';
                    echo '<p><b>ciudad: </b>' . $ciudad . '</p><br>';
                    echo '<p><b>pasatiempo:</b> '. $pasatiempo . '</p><br>';
                ?>

        <h2>¡Bien Hecho!</h2>
        <div id="popUpOverlat"></div>
        <div id="popUpBox">
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1> Volver a Ingresar Datos?</h1>
                <div id="closeModal"></div>
            </div>
        </div>
      <button onclick="Alert.render('¿Deseas agregar otro registro?')" class="btn">Agregar otro registro</button>
        <script src="js/app.js"></script>
        </center>
    </div>
</body>
</html>
