<html>
<body>

<?php
$value =['pirmad' , 'antrad' , 'treciad' , 'ketvirtad' , 'penktad' , 'sestad' , 'sekmad'];
$value1 =['mociute' , 'senelis' , 'anukas' , 'dukterecia'];
unset($value1 [1]);
print_r($value1);
echo "<br>";
array_push($value1 , 'senelis');
print_r($value);
echo "<br>";

if(in_array('mama', $value)){
    echo "radom";
}
else {
    echo "nera";
};
echo "<br>";

shuffle($value1);
print_r($value1);
echo "<br>";

sort($value);
echo "<br>";




echo "<ul><li>";
echo join('<li>', $value);
echo "<br>";
echo "</ul></li>";

$array = ["pirmad" => "Bloga",
    "antrad" => "Blogesne" ,
    "treciad" => "biski blogesne" ,
    "ketvirtad" => "blogiausia"];
foreach ($array as $value => $item) {
    echo $value. " : " . $item. "<br>";
}


$array = ["pirmad" => "Bloga",
    "antrad" => "Blogesne" ,
    "treciad" => "biski blogesne" ,
    "ketvirtad" => "blogiausia"];
foreach ($array as $value => $item) {
    echo $value. " : " . $item. "<br>";
}
?>

</body>
</html>