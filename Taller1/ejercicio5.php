<?php
$h = $_GET ['num1'];
$b = $_GET ['num2'];
$d = $h - $b;

if($h>$b){
    if($h>$b){
        echo " Natalia tiene ", $h , " años ", " se llevan ", $d , " años de diferencia ";
    }else{
        echo " Felipe  tiene ", $b , " años ", " se llevan ", $d , " años de diferencia ";
    }
}
?>