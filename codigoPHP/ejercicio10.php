<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br>";

        echo "<pre>" . htmlspecialchars(file_get_contents($_SERVER['SCRIPT_FILENAME'])) . "</pre>";
        ?>
    </body>
</html>
