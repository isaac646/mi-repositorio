<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Datos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive">  
        <h1>Captura de datos personales</h1>
        <h2>Ingresa los datos que se te piden</h2>
        <p>Mi primera encuesta</p>
        <hr>

        <form action="resultados.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="Ingresa tu nombre"/>
            <hr>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" />
            <hr>
            <label for="ciudad">Ciudad donde vives:</label>
            <input type="text" id="ciudad" name="ciudad" value="Ingresa tu ciudad"/>
            <hr>
            <label for="pasatiempo">Pasatiempo favorito:</label>
            <input type="text" id="pasatiempo" name="pasatiempo" value="Ingresa tu pasatiempo"/>
             

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>

