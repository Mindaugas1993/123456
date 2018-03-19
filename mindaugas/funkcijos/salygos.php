<?php
function suma ($skaicius1, $skaicius2){
    $suma = $skaicius1 + $skaicius2;
    return $suma;
}
echo suma (2,  20) . "<br>" ;

function daugyba ($skaicius1, $skaicius2){
    $daugyba = $skaicius1 * $skaicius2;
    return $daugyba;
}
echo daugyba (3,  10) . "<br>" ;

function dalyba ($skaicius1, $skaicius2){
    $dalyba = $skaicius1 / $skaicius2;
    return $dalyba;
}
echo dalyba (5,  5) . "<br>";

function salyga ($skaicius1, $skaicius2, $skaicius3, $skaicius4){
    $salyga = $skaicius1 + $skaicius2 * $skaicius3 - $skaicius4;
    return $salyga;
}
echo salyga (5,  5, 4, 4) . "<br>";
?>
/**
 * Created by PhpStorm.
 * User: user3
 * Date: 2018-03-07
 * Time: 10:36
 */