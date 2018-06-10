<?php
$correcto = array('rojo','azul','verde');
$cable = array('rojo','azul','verde');
$correcto = $correcto[rand(0,count($correcto)-1)];
echo 'La bomba se activo.';
$cable = $cable[rand(0,count($cable)-1)];
if ($correcto == $cable) {
    echo 'Ganaste!';
} else {
    echo 'Perdiste!';
}
?>
