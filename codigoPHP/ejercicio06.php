<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    
        // Sacamos el tiempo actual en la variable dtFecha
        $dtFecha = new DateTime();

        // Suma de 60 dias con el parametro modify
        $dtFecha->modify('+60 days');
        
        // Fecha formateada con el formato (dia-mes-año)
        echo "Fecha formateada con la suma de 60 dias: ".$dtFecha->format('d-m-Y')."\n";
    ?>
    </body>
</html>
