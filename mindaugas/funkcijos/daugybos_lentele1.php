<?php
echo "<table>";
for($tr=1; $tr<=10; $tr++){
    echo "<tr>";
    for($number=1; $number<=10; $number++){
        $multiply = $tr * $number;
        echo "<td> $tr x $number = $multiply</td>";
    }
    echo "</tr>";
}
echo "</table>";
/**
 * Created by PhpStorm.
 * User: user3
 * Date: 2018-03-07
 * Time: 11:10
 */