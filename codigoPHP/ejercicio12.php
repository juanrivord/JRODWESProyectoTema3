<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br>";

            echo "<h2>Lista de variables en \$_SERVER<h2>";

            echo "<ul>";

            foreach ($_SERVER as $clave => $valor) {
                echo "<li>$clave: is_array($valor) ? json_encode($valor) : $valor</li>";
            }

            echo "</ul>";
        ?>
    </body>
</html>
