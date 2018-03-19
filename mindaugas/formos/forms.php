<html> <head> <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> </head>
<body> <div class="container"> <H1> form</H1>
    <div class="row"> <div class="col-4"> <form method="POST" action="index4.php"> <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control"> </div>
                <div class="form-group"> <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email"> </div>
                <button name="submit" type="submit" class="btn btn-primary">submit</button>
            </form> </div>
/**
 * Created by PhpStorm.
 * User: user3
 * Date: 2018-03-15
 * Time: 09:36
 */