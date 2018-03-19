<?php
$servername = "localhost";
$username = "root";
$password = "labas";
$dbname = "nauja_forma";

$tableData = [];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM naujaforma2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. " - Username: " . $row["username"].  " - Email: " . $row["email"].  " - Street: " . $row["streetname"].  " - City: " . $row["city"].  " - Phone: " . $row["phone"]. "<br>";
        $tableData[] = $row;
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
<html lang="en">
<head>
    <title>Nauja Forma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Information</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Username</th>
            <th>Email</th>
            <th>Address</th>
            <th>Shoe_size</th>
            <th>Phone</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($tableData as $val) {
            ?>
            <tr>
                <td><?= $val['name'] ?></td>
                <td><?= $val['surname'] ?></td>
                <td><?= $val['username'] ?></td>
                <td><?= $val['email'] ?></td>
                <td><?= $val['address'] ?></td>
                <td><?= $val['shoe_size'] ?></td>
                <td><?= $val['phone'] ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>