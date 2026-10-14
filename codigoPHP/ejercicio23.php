<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require_once '../core/231018libreriaValidacion.php'; ?>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br><br>";


        // Inicialización de variables
        date_default_timezone_set('Europe/Madrid');
        $dFechaAlta = new DateTime(); // Variable de fecha de alta, inicializada como fecha
        $entradaOK = true; // Variable que nos indica que todo va bien
        //Array donde recogemos los mensajes de error
            $aErrores = [
                'nombre' => "",
                'sueldo' => "",
                'fechaAlta' => ""];
            //Array donde recogemos la respuestas correctas
            $aRespuestas = [
                'nombre' => "",
                'sueldo' => "",
                'fechaAlta' => ""];
        ?>

        <form name="formularioProductos" action="<?php $_SERVER['PHP_SELF']?>" method="post">

            <label>Nombre del alumno: </label>
            <input type="text" name="nombre" id="nombre" value="<?php echo (isset($_REQUEST['nombre'])?$_REQUEST['nombre']:'Juan'); ?>">
            <br>
            <label>Sueldo del alumno: </label>
            <input type="text" name="sueldo" id="sueldo" value="<?php echo (isset($_REQUEST['sueldo'])?$_REQUEST['sueldo']:'25'); ?>">
            <br>
            <label>Fecha del alta del alumno: </label>
            <input type="date" name="fechaAlta" id="fechaAlta" value="<?php echo (isset($_REQUEST['fecha'])?$_REQUEST['fecha']:''); ?>">
            <br>
            <input type="submit" value="enviar" />

        <?php
        if (isset($_POST['enviar'])) {

        // Validar Entrada

            $aErrores["nombre"] = validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"]);


            foreach ($aErrores as $campo => $valor) {
                if(!empty($valor)) $entradaOK = false; // Encontramos un error
            }

        // El formulario no se envia
        }else {
            $entradaOK = false;
        }

        // Tratamiento del formulario

        if($entradaOK){
            // Cargar la variable $aRespuestas y tratamiento de datos OK


        // Mostrar formulario hasta que se rellene correctamente
        }else{

        }

        








        /*
        <?php
            //Inicializacion de variables
            $entradaOK = true; // Variable que nos indica que todo va bien
            //Array donde recogemos los mensajes de error
            $aError = [
                'nombre' => "",
                'apellido' => "",
                'fechaNacimiento' => ""];
            //Array donde recogemos la respuestas correctas
            $aRespuesta = [
                'nombre' => "",
                'apellido' => "",
                'fechaNacimiento' => ""];

            // Comprueba si el formulario se a enviado
            if (isset($_POST["enviar"])) {
                // Validar Entrada
                // $oFechaHoraActual= new DateTime();
                //$oFechaHoraActual->format("d/m/Y")
                
                $aError["nombre"] = validacionFormularios::comprobarAlfabetico($_POST["nombre"],1000,1,1);
                $aError["apellido"] = validacionFormularios::comprobarAlfabetico($_POST["apellido"],1000,1,1);
                $aError["fechaNacimiento"] = validacionFormularios::validarFecha($_POST["fechaNacimiento"],"01/01/2027","01/01/1900", 1);

                foreach ($aError as $value) {
                    if (!empty($value)) {
                        $entradaOK = false;
                    }
                }
            }
            // El formulario no se ha enviado nunca
            else {
                $entradaOK = false;
            }

            if ($entradaOK) {
                //Cargar la variable $aRespuestas y tratamiento de datos OK
                $aRespuesta["nombre"] = htmlspecialchars($_POST["nombre"]);
                $aRespuesta["apellido"] = htmlspecialchars($_POST["apellido"]);
                $aRespuesta["fechaNacimiento"] = htmlspecialchars($_POST["fechaNacimiento"]);

                $oFechaNacimientoDateTime = new DateTime($aRespuesta["fechaNacimiento"]);

                echo '<h3> Formulario Tratamiento</h3>';
                echo '<p>Nombre: ' . $aRespuesta["nombre"] . '</p>';
                echo '<p>Apellido: ' . $aRespuesta["apellido"] . '</p>';
                echo '<p>Fecha de Nacimiento: ' . $oFechaNacimientoDateTime->format("d/m/Y") . '</p>';
            } else {
                // Mostrar Formulario
                ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formulario" method="post" novalidate>
                    <h3>Formulario: Tratamiento</h3>
                    <label for="nombre" >Nombre:</label>
                    <input type="text" name="nombre" id="nombre"/>
                    <?php
                    if (!empty($aError["nombre"])) {
                        echo "<span style='color:red;'>" . $aError['nombre'] . "</span>";
                    }
                    ?>
                    <br/>
                    <label for="apellido" >Apellido:</label>
                    <input type="text" name="apellido" id="apellido"/>
                    <?php
                    if (!empty($aError["apellido"])) {
                        echo "<span style='color:red;'>" . $aError['apellido'] . "</span>";
                    }
                    ?>
                    <br/>
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" value=/>
                    <?php
                    if (!empty($aError["fechaNacimiento"])) {
                        echo "<span style='color:red;'>" . $aError['fechaNacimiento'] . "</span>";
                    }
                    ?>

                    <br/>
                    <input type="submit" name="enviar" id="enviar"/>
                </form>  
                <?php
            }
            ?>
            */
        ?>

        </form>

        
    </body>
</html>