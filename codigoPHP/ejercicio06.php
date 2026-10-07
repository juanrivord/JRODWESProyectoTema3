<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Sacamos el tiempo actual en la variable dtFecha
        $oFecha = new DateTime();

        // Suma de 60 dias con el parametro modify
        $oFecha->modify('+60 days');
        
        // Fecha formateada con el formato (dia-mes-año)
        echo "Fecha formateada con la suma de 60 dias: ".$oFecha->format('d-m-Y')."\n";
    ?>
    </body>
</html>
