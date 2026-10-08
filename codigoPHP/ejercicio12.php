<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br>";

        //POR ACABAR

            echo "<h2>Lista de variables en \$_SERVER<h2>";

            foreach ($_SERVER as $clave => $valor) {
                echo "\$_SERVER['" .$clave. "']: ". $valor."<br>";
            }

        ?>
    </body>
</html>
