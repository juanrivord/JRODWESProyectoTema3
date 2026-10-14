<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require_once '../core/231018libreriaValidacion.php'; ?>
    </head>
    <body>
         <?php
                
            if(isset($_REQUEST['submit'])){
                $sNombre = $_REQUEST['nombre'];
                $dFechaNac = $_REQUEST['fecha'];
                $fSueldo= $_REQUEST['sueldo'];
                print_r('El nombre es: ' . $sNombre);
                echo '<br>';
                print_r('La fecha de nacimiento es: ' . $dFechaNac);
                echo '<br>';
                print_r('El sueldo mensual es: ' . $fSueldo);
                echo '<br>';
                
                    // Contenido con print_r de las variables $_REQUEST
                echo '<p>Contenido de $_RESQUEST: </p>';
                echo '<pre>';
                print_r($_REQUEST);
                echo '</pre>';

                // Contenido con print_r de las variables $_GET
                echo '<p>El contenido de $_GET: </p>';
                echo '<pre>';
                print_r($_GET);
                echo '</pre>';

                // Contenido con print_r de las variables $_POST
                echo '<p>El contenido de $_POST: </p>';
                echo '<pre>';
                print_r($_POST);
                echo '</pre>';
            }else{
        ?>
        
        <form name="input" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label name="nombre" >Nombre:</label>
            <input type="text" name="nombre" id="nombre" required/>
            <br/>
            <label name="fecha">Fecha de Nacimiento:</label>
            <input type="date" name="fecha" id="fecha" required/>
            <br/>
            <label name="sueldo">Sueldo mensual:</label>
            <input type="number" name="sueldo" min="0" id="sueldo" step="any" required/><br>
            <input type="submit" name="submit" value="Enviar"/>
        </form>
        <?php
            }
        ?>

        
    </body>
</html>