<?php
session_start();
if(!isset($_SESSION["emp_userid"]))
{
$show=header("location:login.php");
}
?>

<?php include 'condb.php';
$ids=$_GET['id'];
$_SESSION["id_order"]=$ids;
// แสดงรูปหลักฐานการชำระเงิน
$sql1 ="select * from tb_order t, payment m where t.orderID=m.orderID and t.orderID = '$ids' ";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1);
$image_bill=$row1['pay_image'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Report</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'menu1.php'; ?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">





                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                แสดงรายการสินค้า
                             <div> 
                                <br>
                             <a href="report_order.php"> <button type="button" class="btn btn-outline-success">กลับหน้าหลัก</button> </a>
                             </div>
                             <br>


                            </div>
                            <div class="card-body">
                                <h5>เลขที่ใบสั่งซื้อ : <?=$ids?></h5>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>รหัสสินค้า</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>ราคา</th>
                                            <th>จำนวน</th>
                                            <th>ราคารวม</th>

                                        </tr>
                                    </thead>

<?php

$sql ="select * from order_detail d, product p,tb_order t where d.orderID=t.orderID 
and d.pro_id=p.pro_id and d.orderID='$ids' order by d.pro_id";

$result=mysqli_query($conn,$sql);
$sum_total=0;
while($row=mysqli_fetch_array($result)){
    $sum_total=$row['total_price'];

?>
                                        <tr>
                                            <td><?=$row['pro_id']?></td>
                                            <td><?=$row['pro_name']?></td>
                                            <td><?=$row['orderPrice']?></td>
                                            <td><?=$row['orderQty']?></td>
                                            <td><?=$row['Total']?></td>
                                            
                                        </tr>
                                    <?php
                                    }
                                    mysqli_close($conn);
                                    ?>
                                </table>
                                <b>ราคารวมสุทธิ <?=number_format($sum_total,2)?> บาท</b>
                            </div>
                        </div>
                        <div class="text-center">
                            <?php if($image_bill <> ""){ ?>
                            <h5 style="color: green;">"ชำระเงินแล้ว"</h5>
                            <img src="../img/payment/<?=$row1['pay_image']?>" width="300px" >
                        <?php }else{ ?>
                            <h5 style="color: blue;"> "ยังไม่ได้ชำระเงิน" </h5>
                        <?php } ?>
                    </div>
                    <form method="POST" action="update_order.php">
                        <div class="row">
                            <div class="col-md-3 mx-auto">
                                

                    <label class="mt-4">ปรับสถานะการชำระเงิน</label>
                    <select class="form-select"name="status" aria-label="Default select example">
                    <option value="1">ยังไม่ชำระเงิน</option>
                    <option value="2">ชำระเงินแล้ว</option>
                    <option value="3">จัดส่งสินค้าเรียบร้อย</option>
                    <option value="0">ยกเลิกใบสั่งซื้อ</option>
                    </select>
                    <label class="mt-4">เลขที่ EMS/เลขที่การจัดส่งสินค้า </label>
                    <input type="text" name="idEMS" class="form-control">
                    <button type="submit" class="btn btn-primary mt-4 mb-4">บันทึก</button>
                    </form>
                        </div>
                        </div>




                </main>
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
