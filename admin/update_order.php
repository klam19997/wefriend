<?php
session_start();
include 'condb.php';
$status=$_POST['status'];
$idEMS=$_POST['idEMS'];
$order_id=$_SESSION["id_order"];

$sql="UPDATE tb_order SET order_status = '$status', id_ems='$idEMS' WHERE orderID= '$order_id' ";
$result=mysqli_query($conn,$sql);
if($result){
    //echo "<script>alert('อัพเดตข้อมูลเรียบร้อย'); </script>";
    echo "<script>window.location='report_order.php'; </script>";
}else{
    echo "<script>alert('ไม่สามารถอัพเดตข้อมูลได้'); </script>";
}

mysqli_close($conn);
?>