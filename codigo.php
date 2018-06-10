<?php
$correcto = $_GET["Correctos"];
if (empty($_GET["Correctos"]) || $_GET["Correctos"] == null)
{
    $correcto = array('rojo','azul','verde');
}
$cable = $_GET["Cables"];
if (empty($_GET["Cables"]) || $_GET["Cables"] == null)
{
    $cables = array('rojo','azul','verde');
}
$correcto = $correcto[rand(0,count($correcto)-1)];
echo 'La bomba se activo.';
$cable = $cable[rand(0,count($correcto)-1)];
if ($correcto == $cable) {
    echo 'Ganaste!';
} else {
    echo 'Perdiste!';
}
?>
