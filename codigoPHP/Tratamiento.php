<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='ejercicio21.php'>⬅ Volver al formulario</a><br>";

        $sNombre = $_REQUEST['nombre'];
        $iSueldo = $_REQUEST['sueldo'];
        $dFechaAlta = $_REQUEST['fechaAlta'];

        print "Nombre: ".$sNombre;
        echo("<br>");
        print "Sueldo: ".$iSueldo;
        echo("<br>");
        print "Fecha de Alta: ".$dFechaAlta;
        ?>

        
    </body>
</html>