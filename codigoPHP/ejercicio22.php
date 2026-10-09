<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br>";

        date_default_timezone_set('Europe/Madrid');
        $dFechaActual = new DateTime();
        ?>
        <form name="formularioProductos" action="" method="post">

            <label>Nombre del alumno: </label>
            <input type="text" name="nombre" id="nombre" value="<?php echo (isset($_REQUEST['nombre'])?$_REQUEST['nombre']:'Juan'); ?>">
            <br>
            <label>Sueldo del alumno: </label>
            <input type="text" name="sueldo" id="sueldo" value="<?php echo (isset($_REQUEST['sueldo'])?$_REQUEST['sueldo']:'25'); ?>">
            <br>
            <label>Fecha del alta del alumno: </label>
            <input type="date" name="fechaAlta" id="fechaAlta" value="<?php echo (isset($_REQUEST['fecha'])?$_REQUEST['fecha']:''); ?>">
            <br>
            <input type="submit" value="Enviar" />


        </form>

        
    </body>
</html>