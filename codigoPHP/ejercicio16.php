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
        
        $aSueldosPercibidosAsociativo = [
        "Lunes" => 50,
        "Martes" => 60,
        "Miercoles" => 55,
        "Jueves" => 56,
        "Viernes" => 20,
        "Sabado" => 40,
        "Domingo" => 10];
        $fSueldoSemanal = 0.0;

        reset($aSueldosPercibidosAsociativo);

        while (key($aSueldosPercibidosAsociativo) != null) {
            echo 'El dia de la semana '.key($aSueldosPercibidosAsociativo).'</br>';
            
            echo 'El sueldo de ese dia es '.current($aSueldosPercibidosAsociativo).'</br>';

            echo('<br>');

            $fSueldoSemanal+=current($aSueldosPercibidosAsociativo);
            
            next($aSueldosPercibidosAsociativo);
        }
        

        echo("El valor total percibido es una semana es: ".$fSueldoSemanal."€");
        ?>
    </body>
</html>