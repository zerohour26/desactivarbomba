<?php
$array1 = array('rojo','azul','verde');
$correcto = array_rand($array1,2);
echo 'La bomba se activo.';
$cable = array_rand($array1,2);
if ($correcto == $cable) {
    echo 'Ganaste!';
} else {
    echo 'Perdiste!';
}
?>
