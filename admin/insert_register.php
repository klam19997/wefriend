<?php
include 'condb.php' ;
//รับค่าตัวแปรมาจากไฟล์ register
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$tel = $_POST['telephone'];
$username = $_POST['username'];
$password = $_POST['password'];

//เข้ารหัส password ด้วย sha512
$password=hash('sha512',$password);

//คำสั่งเพิ่มข้อมูลลงตาราง member
$sql ="insert into tb_employee value('','$name','$lastname','$tel','$username','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย'); </script>";
    echo "<script> window.location='fr_employee.php'; </script>";
}else{
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
    echo "<script> alert('บันทึกข้อมูลไม่ได้'); </script>";
}
mysqli_close($conn);
?>