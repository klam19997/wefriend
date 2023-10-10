<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="col-md-4 bg-light text-dark">
<form method="POST" action="login_check.php">
        <p>
        <h3 class="text-center">Login </h3> <p><p>
<input type="text" name="username" maxlength="10" class="form-control" required placeholder="username"> <br>
<input type="password" name="password" maxlength="10" class="form-control" required placeholder="password"> <br>
<?php
    if(!isset($_SESSION["Error"]))
    {
    session_destroy();
    }else{
    echo "<div class='text-danger'>";
    echo $_SESSION["Error"] ;
    echo "</div>";
    }
    $_SESSION['Error'] ="";
?>
<input type="submit" name="submit" class="btn btn-primary" value="Login">

</form>
    </div>
  </div>
  <a href="Register.php"> Register </a>
</div>
    
</body>
</html>