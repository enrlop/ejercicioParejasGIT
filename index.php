<?php
    function hola() {
        echo "hola buenos días."
    }

    hola();

    function esPasswdValido($passwd) {
        $longitud = strlen($passwd);
        $switch = false;
        $cont = 0;
        $contChrMayus = 0;
        $contChrMinus = 0;
        $contChrEsp = 0;

        if ($longitud >= 8) {
            while ($switch == 0 && $cont < $longitud) {
                if (substr($passwd, $cont, 1) >= 'A' && substr($passwd, $cont, 1) <= 'Z') {
                    $contChrMayus++;
                } else if (substr($passwd, $cont, 1) >= 'a' && substr($passwd, $cont, 1) <= 'z') {
                    $contChrMinus++;
                } else {
                    $contChrEsp++;
                }

                if ($contChrMayus >= 1 && $contChrMinus >= 1 && $contChrEsp >= 1) {
                    $switch = true;
                } else {
                    $cont++;
                }
            }
            return $switch;
        } else {
            return $switch;
        }
    }
?>

//Comentario añadido para el ejercicio 7
<?php
$nombre = "Maria";
echo "¡Hola! Mi nombre es " . $nombre . "<br>";
echo "¡Hola! Mi nombre es " . $NOMBRE . "<br>";
echo "¡Hola! Mi nombre es " . $NomBre . "<br>";
?>
