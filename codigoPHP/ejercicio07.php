<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br>";

        $sNombreFichero = basename($_SERVER['PHP_SELF']);
        echo ("El fichero en ejecucion es: ".$sNombreFichero);
        ?>
    </body>
</html>
