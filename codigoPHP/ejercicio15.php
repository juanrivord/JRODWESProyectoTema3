<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br>";
        
        $aSueldosPercibidos=[25,30,35,20,15,40,50];
        $iAcumulador = 0;

        foreach ($aSueldosPercibidos as $value) {
            $iAcumulador+=$value;
        }

        echo("El valor percibido es una semana es: ".$iAcumulador."€");
        ?>
    </body>
</html>
