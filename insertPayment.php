<?php
include 'condb.php';
$orderID=$_POST['order_id'];
$totalPrice=$_POST['total_price'];
$payDate=$_POST['pay_date'];
$payTime=$_POST['pay_time'];

//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'b_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./img/payment/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }
$sql="insert into payment(orderID,pay_money,pay_date,pay_time,pay_image)
values('$orderID','$totalPrice','$payDate','$payTime','$new_image_name')";
$hand=mysqli_query($conn,$sql);
if($hand){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย'); </script>";
    echo "<script>window.location='pay_ment.php'; </script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้'); </script>";
}
mysqli_close($conn);

?>