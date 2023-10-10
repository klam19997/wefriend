<?php
include 'condb.php';
$ids=$_GET['id'];

$sql="UPDATE tb_order SET order_status = 2 WHERE orderID='$ids' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('ปรับสถานะเป็นสั่งซื้อเรียบร้อย'); </script>";
    echo "<script>window.location='report_order.php'; </script>";
}else{
    echo "<script>alert('ไม่สามารถเปลี่ยนเป็นสั่งซื้อแล้วได้'); </script>";
}

mysqli_close($conn);
?>