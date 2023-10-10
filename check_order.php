<?php
session_start();
include 'condb.php';

if(!isset($_SESSION["cus_userid"]))
{
$show=header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สถานะการสั่งซื้อ</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'menu.php';?>
<div class="container">
<div class="alert alert-success h4 mt-4 text-center" role="alert">
 เช็คสถานะการสั่งซื้อสินค้า
</div>
<table class="table table-striped table-hover mt-4">
<tr>
    <th>เลขที่ใบสั่งซื้อ</th>
    <th>ชื่อ-นามสกุล</th>
    <th>ราคารวม</th>
    <th>วันที่สั่งซื้อ</th>
    <th>เลขที่การจัดส่งสินค้า</th>
    <th>สถานะการสั่งซื้อ</th>
</tr>
<?php
$sql="select * from tb_order where cus_id='" . $_SESSION["cus_userid"] . "' ";
$hand=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){
$orderStatus=$row['order_status'];


?>
<tr>
    <td><?=$row['orderID']?></td>
    <td><?=$row['cus_name']?></td>
    <td><?=$row['total_price']?></td>
    <td><?=$row['reg_date']?></td>
    <td><?=$row['id_ems']?></td>
    <td>
<?php if($orderStatus == 1){
    echo "ตรวจสอบการชำระเงิน";
}else if($orderStatus == 2){
    echo "ชำระเงินเรียบร้อยแล้ว";
}else if($orderStatus == 3){
    echo "จัดส่งสินค้าเรียบร้อยแล้ว";
}
?>


    </td>
</tr>
</table>
<?php
}
mysqli_close($conn);
?>
</div>
</body>
</html>