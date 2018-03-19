<?php
function getchinezodiac($year){
    switch ($year % 12):
        case 1: return 'Avinas';
        case 2: return 'Jautis';
        case 3: return 'Mergele';
        case 4: return 'Saulys';
        case 5: return 'Skorpionas';
        case 6: return 'Karver';
        case 7: return 'Suo';
        case 8: return 'Zuikis';
        case 9: return 'Bartas';
        case 10: return 'Drakonas';
        case 11: return 'Gyvate';
        case 12: return 'Grybas';
    endswitch;


}
echo getchinezodiac(5)
?>
/**
 * Created by PhpStorm.
 * User: user3
 * Date: 2018-03-07
 * Time: 11:04
 */