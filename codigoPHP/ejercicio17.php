<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><br>";

        $oTeatro = array_fill(0, 20, array_fill(0, 15, null));

        $oTeatro[0][4] = "Carlos";
        $oTeatro[3][11] = "Alberto";
        $oTeatro[7][2] = "Raul";
        $oTeatro[14][14] = "Juan";
        $oTeatro[19][0] = "Juanmi";

        echo '<h2>Recorrido con foreach</h2> <br>';

        foreach ($oTeatro as $iNumFila => $fila) {
            foreach ($fila as $iNumAsiento => $oPersona) {
                if ($oPersona !== null) {
                    echo "Fila " . ($iNumFila + 1) . ", Asiento " . ($iNumAsiento + 1) . ": Ocupado por $oPersona<br>";
                }
            }
        }
        ?>
    </body>
</html>