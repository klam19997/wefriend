<?php
include 'condb.php';
$id=$_GET['id'];
$sql="SELECT * FROM member WHERE id='$id' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
    <div class=" h4 text-center alert alert-info mb-4 mt-4" role="alert"> แก้ไขข้อมูลสมาชิก </div>
    <form method="POST" action="update_member.php">
    <label>รหัสสมาชิก:</label>
    <input type="text" name="id_mem" class="form-control" readonly value=<?=$row['id']?> > <br>
    <label>ชื่อ:</label>
    <input type="text" name="fname" class="form-control" value=<?=$row['name']?> > <br>
    <form method="POST" action="">
    <label>นามสกุล:</label>
    <input type="text" name="lname" class="form-control" value=<?=$row['surname']?> > <br>
    <form method="POST" action="">
    <label>เบอร์โทรศัพท์:</label>
    <input type="number" name="telephone" class="form-control" value=<?=$row['telephone']?> > <br>
    <input type="submit" value="Update" class="btn btn-success">
    <td><a href="show_member.php" class="btn btn-danger">Cancel</a></td>
</form>

</div>
</div>

</div>
</body>
</html>