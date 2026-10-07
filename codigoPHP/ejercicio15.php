<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br>";

        echo("<h2>Array normal</h2>");
        
        $aSueldosPercibidos=[25,30,35,20,15,40,50];
        $aSueldosPercibidosAsociativo = ["Lunes" => 50,"Martes" => 60,"Miercoles" => 55,"Jueves" => 56,"Viernes" => 20,"Sabado" => 40,"Domingo" => 10];
        $iAcumulador = 0;
        $iAcumuladorNuevo = 0;

        foreach ($aSueldosPercibidos as $value) {
            $iAcumulador+=$value;
        }

        echo("El valor percibido es una semana es: ".$iAcumulador."€");

        echo("<hr>");

        echo("<h2>Array asociativo</h2>");

        foreach ($aSueldosPercibidosAsociativo as $key => $value) {
            echo("El <strong>".$key."</strong> ha ganado: ".$value."<br>");
            $iAcumuladorNuevo += $value;
        }

        echo("El valor total percibido es una semana es: ".$iAcumuladorNuevo."€");


        ?>
    </body>
</html>
