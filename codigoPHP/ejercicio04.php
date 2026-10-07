<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br>";
        //Inicializar la variable $oFecha de tipo DateTime.
        $dFechaEspana = new DateTime(null, new DateTimeZone('Europe/Madrid'));
        $dFechaOporto = new DateTime(null, new DateTimeZone('Europe/Lisbon'));
        //Mostrar el dia, mes año y hora actual en Oporto. Format pertenece a la clase DateTime y formatea las fechas. Permite dar un formato personalizado a objetos de fecha
        echo '<p>Hoy es '.$dFechaOporto->format("d").' de '.$dFechaOporto->format("M").' de '.$dFechaOporto->format("Y").' y son las '.$dFechaOporto->format("H:i").' horas en Oporto</p>';
        //Mostrar el dia, mes año y hora actual en España.
        echo '<p>Hoy es '.$dFechaEspana->format("d").' de '.$dFechaEspana->format("M").' de '.$dFechaEspana->format("Y").' y son las '.$dFechaEspana->format("H:i").' horas en España</p>';
    ?>
    </body>
</html>
