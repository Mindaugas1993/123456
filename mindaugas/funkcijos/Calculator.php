<html>
<head>
    <title>Salygos</title>
</head>
<form method="post">
    <input type="text" name="numeris1">
    <input type="text" name="numeris2">
    <select name="operator" id="">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
        <option>Square</option>
    </select>
    <button type="submit" name="submit" value="submit">Skaiciuoti</button>
</form>
<?php
if (isset($_POST['submit'])) {
    $result1 = $_POST['numeris1'];
    $result2 = $_POST['numeris2'];
    $operator = $_POST['operator'];
    {
        switch ($operator) {
            case 'None':
                echo "Pasirinkti veiksma";
                break;
            case  'Add':
                echo $result1 + $result2;
                break;
            case  'Subtract':
                echo $result1 - $result2;
                break;
            case  'Multiply':
                echo $result1 * $result2;
                break;
            case  'Divide':
                echo $result1 / $result2;
                break;
            case  'Square':
                echo $result1 ** $result2;
                break;


        }
    }
}
?>



</html>



