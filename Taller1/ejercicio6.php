<?php
$v = $_GET ['num1'];
$p = $_GET ['num2'];
$t = $_GET ['num3'];
$d = 2000;
$s = 5000;
$y = 500;
echo " los volantes cuestan en total ", $v * $d ;
echo " los posters cuestan en total ", $p * $s ;
echo " las tarjetas de presentacion cuestan en total ", $t * $y ;
echo " el total de la cuenta es ", $v * $d + $p * $s + $t * $y ;
?>