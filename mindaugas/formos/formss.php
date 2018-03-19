<?php
session_start();
$conn=mysqli_connect("localhost", "root", "labas" ,"nauja_forma");
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "INSERT INTO nauja_forma (name, email, phone, address, shoe_size) 
      VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['address']."', 
      '".$_POST['shoe_size']."')";

if($_SERVER["REQUEST_METHOD"] =='POST'){
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['shoe_size']) ||strlen($_POST['name'])<5)  {

        $error = "Bad entry";
        if(strlen($_POST['name']>=1)) {
            $error = "Name too short";
        }
    }

    else {
        $success = "File updated successfully";
        $file = 'formos.txt';
        $previousData = file_get_contents($file);
        $postData = $_POST['name']. " ".$_POST['username']. " ". $_POST['email']. " ".$_POST['phone']. " ". $_POST['address']. " ".$_POST['shoe_size']. " ". "\r\n";
        file_put_contents($file, $previousData.$postData );
    }
}

$servername = "localhost";
$username = "root";
$password = "labas";
$dbname = "nauja_forma";
?>

<html>
<head>
    <title>Registracija</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <H1>Registration</H1>

    <div class="row">

        <div class="col-4">
            <?php if(isset($error)) {
                echo '<div class="aler alert-danger">' .$error.'</div>';
            }
            elseif(isset($success)) {
                echo '<div class="alert alert-success">' .$success. '</div>';
            }
            ?>

            <form method="POST" action="">

                <div class="form-group">

                    <label for="name">Last Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input name="phone" type="text" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control" id="address">
                </div>
                <div class="form-group">
                    <label for="shoe_size">Shoe_size</label>
                    <input name="shoe_size" type="text" class="form-control" id="shoe_size">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
</body>
</html>
