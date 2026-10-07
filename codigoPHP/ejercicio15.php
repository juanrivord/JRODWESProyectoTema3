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
        $aSueldosPercibidosAsociativo = [
        "Lunes" => 50,
        "Martes" => 60,
        "Miercoles" => 55,
        "Jueves" => 56,
        "Viernes" => 20,
        "Sabado" => 40,
        "Domingo" => 10];
        $fSueldoSemanal = 0.0;
        $fSueldoSemanalNuevo = 0;

        foreach ($aSueldosPercibidos as $sueldo) {
            $fSueldoSemanal+=$sueldo;
        }

        echo("El valor percibido es una semana es: ".$fSueldoSemanal."€");

        echo("<hr>");

        echo("<h2>Array asociativo</h2>");

        foreach ($aSueldosPercibidosAsociativo as $dia => $sueldo) {
            echo("El <strong>".$dia."</strong> ha ganado: ".$sueldo."<br>");
            $fSueldoSemanalNuevo += $sueldo;
        }

        echo("<br>");

        echo("El valor total percibido es una semana es: ".$fSueldoSemanalNuevo."€");
        ?>
    </body>
</html>
