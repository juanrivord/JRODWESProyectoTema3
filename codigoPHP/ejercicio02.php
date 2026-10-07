<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br>";
        
        $sNombre = "Juan";
        
        
        echo("Hecho con EOT (heredoc):<br>");
        $sCadena = <<<EOT
        Hola, $sNombre. 
        Este texto abarca varias líneas.
        No necesitas usar las comillas dobles (") ni las simples (').
        EOT;
                
        echo $sCadena;
        ?>
    </body>
</html>
