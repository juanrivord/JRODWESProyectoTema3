<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        require_once '../core/231018libreriaValidacion.php'; 
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br><br>";
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
                
                $aError["nombre"] = validacionFormularios::comprobarAlfabetico($_POST["nombre"],1000,1,1);
                $aError["apellido"] = validacionFormularios::comprobarAlfabetico($_POST["apellido"],1000,1,1);
                date_default_timezone_set("Europe/Madrid"); // No se si esto es necesario, pero lo pongo por si acaso
                
                // la funcion date devuelve la asignacion de hoy con el formato que le pongamos, con parametro 0 devuelve la fecha mínima aceptada, en este caso
                // no queremos la fecha mínima, sino un año desde el 1900, ya que estamos validando fechas de nacimiento
                $aError["fechaNacimiento"] = validacionFormularios::validarFecha($_POST["fechaNacimiento"],date("Y-m-d H:i:s"),"1900-01-01 00:00:00", 1);

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
                $aRespuesta["fechaNacimiento"] = new DateTime($aRespuesta["fechaNacimiento"]);

                echo '<h3> Formulario Tratamiento</h3>';
                echo '<p>Nombre: ' . $aRespuesta["nombre"] . '</p>';
                echo '<p>Apellido: ' . $aRespuesta["apellido"] . '</p>';
                echo '<p>Fecha de Nacimiento: ' . $aRespuesta["fechaNacimiento"]->format("d/m/Y") . '</p>';
            } else {

                // Mostrar Formulario
                ?>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formulario" method="post" novalidate>
                    <h3>Formulario: Tratamiento</h3>
                    <label for="nombre" >Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo (isset($_REQUEST['nombre'])?$_REQUEST['nombre']:''); ?>"/>

                    <?php
                    if (!empty($aError["nombre"])) {
                        echo "<span style='color:red;'>" . $aError['nombre'] . "</span>";
                    }
                    ?>

                    <br/>
                    <label for="apellido" >Apellido:</label>
                    <input type="text" name="apellido" id="apellido" value="<?php echo (isset($_REQUEST['apellido'])?$_REQUEST['apellido']:''); ?>"/>

                    <?php
                    if (!empty($aError["apellido"])) {
                        echo "<span style='color:red;'>" . $aError['apellido'] . "</span>";
                    }
                    ?>

                    <br/>
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo (isset($_REQUEST['fechaNacimiento'])?$_REQUEST['fechaNacimiento']:''); ?>"/>

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

        </form>

        
    </body>
</html>