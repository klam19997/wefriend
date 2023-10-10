<?php
include 'condb.php';
session_start();

$user =$_POST['username'];
$password =$_POST['password'];

//เข้ารหัส password ด้วย sha512
$password=hash('sha512',$password);

$sql="SELECT * FROM tb_employee where username='$user' and password ='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row > 0){
    $_SESSION["emp_username"]=$row['username'];
    $_SESSION["emp_password"]=$row['password'];
    $_SESSION["emp_userid"]=$row['id'];
    $_SESSION["emp_name"]=$row['name'];
    $_SESSION["emp_lastname"]=$row['lastname'];
    $show=header("location:index.php");
    $_SESSIONP['Error'] ="";
}else{
    $_SESSION["Error"] = "<p>ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง </p>";
    $show=header("location:login.php");
}
echo $show;
?>