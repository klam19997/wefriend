<?php
include 'condb.php';
session_start();

$username =$_POST['username'];
$password =$_POST['password'];

//เข้ารหัส password ด้วย sha512
$password=hash('sha512',$password);

$sql="SELECT * FROM tb_customer WHERE username='$username' and password ='$password'";
$result=mysqli_query($conn,$sql);
$row =mysqli_fetch_array($result);

if($row > 0){
    $_SESSION["cus_username"]=$row['username'];
    $_SESSION["cus_password"]=$row['password'];
    $_SESSION["cus_userid"]=$row['id'];
    $_SESSION["cus_name"]=$row['firstname'];
    $_SESSION["cus_lastname"]=$row['lastname'];
    $_SESSION["cus_address"]=$row['address'];
    $_SESSION["cus_tel"]=$row['telephone'];

    $_SESSION["Error"] ="";

    echo "<script> window.location='index.php'; </script>" ;
    $_SESSION["Error"] ="";
}else{
    $_SESSION["Error"] = "<p> ชื่อผู้ใช้หรือรหัสผ่านของคุณไม่ถูกต้อง </p>";
    $show=header("location:login.php");
}
echo $show;
?>