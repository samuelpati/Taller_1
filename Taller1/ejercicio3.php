<?php
$n = $_GET ['ganados'];
$a = $_GET ['perdidos'];
$b = $_GET ['empatados'];

$ganados = $n *3;   
$empatados = $a *1;
$perdidos = $b *0;

$puntaje_total  = $ganados + $empatados + $perdidos;


echo "total de puntos del equipo :$puntaje_total puntos";


?>
