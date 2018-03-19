<html>
<body>
<?php
$kambariai =[101 => 4, 102 => 5, 103 => 2];
$uzimti =[101 => 2, 102 => 3, 103 => 0];

foreach ($kambariai as $numeris => $viso) {

echo "Kambarys " . $numeris . " viso " . $viso . ". Laisvu lovu:" . ($viso - $uzimti[$numeris]) . "<br>";
}




?>
</body>
</html>


