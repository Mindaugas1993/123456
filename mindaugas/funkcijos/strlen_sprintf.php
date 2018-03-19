<html>
<head>
    <?php
    $arnas="arnas";
    $lenght = strlen($arnas);
    for ($string = $lenght; $string >= 0; $string--){
        echo substr($arnas, $string,1);
    }




    $name = "vitalija";

    $length = strlen($name);

    for ($string = $length; $string >= 0; $string--) {
        echo substr($name, $string, 1);
    }


    $num = 5;
    $location = 'tree';

    $format = 'There are %d monkeys in the %s';
    echo sprintf($format, $num, $location);
    echo "<br>";

    $format = 'The %2$s contains %1$d monkeys';
    echo sprintf($format, $num, $location);
    ?>
</head>
</html>