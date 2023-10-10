<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'menu1.php'; ?>
    <div class="container">
    <br> <br>
    <div class="row">
        <div class="col-md-6 bg-light text-dark">
        <br>

    <form method="POST" action="insert_register.php" enctype="multipart/form-data">  
        <br>
    <div class="alert alert-primary h4" role="alert">
    สมัครสมาชิก
    </div>

    ชื่อ <input type="text" name="firstname" class="form-control" required>
    นามสกุล <input type="text" name="lastname" class="form-control" required>
    เบอร์โทรศัพท์<input type="number" name="telephone" class="form-control" required >
    Username <input type="text" name="username" maxlength="10" class="form-control" required>
    Password <input type="password" name="password" class="form-control" required> <br>
    <input type="submit" name="submit" value="บันทึก" class="btn btn-primary">
    <input type="reset" name="cancel" value="ยกเลิก"> <br>

    <a href="login.php"> Login </a>
    </form>

</div>
</div>
    </div>
</body>
</html>