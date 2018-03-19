<?php
    function reverse($string) {
$string = strrev($string);
return $string . "<br>";
}
echo reverse ("Labas");

function didziosios($string) {
$string = strtoupper($string);
return $string . "<br>";
}
echo strtoupper ("dawadwa");

function mazosios($string) {
$string = strtolower($string);
return $string . "<br>";
}
echo strtolower ('dadwwad');


function palendro ($string){
if ($string == strrev($string)){
return strtoupper($string);
}
else{

return strtolower($string);
}
}
echo palendro('abba');
?>