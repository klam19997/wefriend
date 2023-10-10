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
    <title>Cart</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.buddle.min.js" ></script>
</head>
<body>
<?php include 'menu.php';?>
<br> <br>
    <div class="container">
        <form id="form1" method="POST" enctype="multipart/form-data" action="insert_cart.php">
        <div class ="row">
            <div class ="col-md-10">
        <div class="alert alert-success h4" role="alert">
            การสั่งซื้อสินค้า
        </div>
            <table class = "table table-hover">
                <tr>
                    <th>ลำดับที่</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคา</th>
                    <th>จำนวน</th>
                    <th>ราคารวม</th>
                    <th>ลบรายการ</th>
                </tr>
<?php
$Total = 0;
$sumPrice = 0;
$m = 1;
$sumTotal=0;

if(isset($_SESSION["intLine"])) {    //ถ้าไม่เป็นค่าว่างให้ทำงานใน {}


for ($i=0; $i <= (int)$_SESSION["intLine"]; $i++){
    if(($_SESSION["strProductID"][$i]) != ""){
    $sql1="select * from product where pro_id = '" . $_SESSION["strProductID"][$i] . "' "  ;
        $result1 = mysqli_query($conn, $sql1);
        $row_pro = mysqli_fetch_array($result1); 

        $_SESSION["price"] = $row_pro['price'];
        $Total = $_SESSION["strQty"][$i];
        $sum = $Total * $row_pro['price'];
        $sumPrice = $sumPrice + $sum;
        $_SESSION["sum_price"] = $sumPrice;
        $sumTotal=$sumTotal+ $Total;

?>
                <tr>
                    <td><?=$m?></td>
                    <td>
                        <img src="img/<?=$row_pro['image']?>" width="80" height="100" class="border" >
                        <?=$row_pro['pro_name']?>
                    </td>
                    <td><?=$row_pro['price']?></td>
                    <td><?=$_SESSION["strQty"][$i]?></td>
                    <td><?=$sum?></td>
                    <td>
                        <a href="order.php?id=<?=$row_pro['pro_id']?>" class="btn btn-primary">+</a>
                        <?php if($_SESSION["strQty"][$i] > 1){  ?>
                        <a href="order_del.php?id=<?=$row_pro['pro_id']?>" class="btn btn-primary">-</a>
                        <?php }   ?>
                    </td>




                    <td><a href="pro_delete.php?Line=<?=$i?>" ><img src="img/delete.png" width="30" > </a></td>
                </tr>
<?php
 $m=$m+1;
}
}
} //endif
?>
<tr>
<td class="text-end" colspan="4">รวมเป็นเงิน</td>
<td class="text-center"><?=$sumPrice?></td>
<td>บาท</td>
</tr>
</table>
<p class="text-end">จำนวนสินค้าที่สั่งซื้อ <span style="color: green;"><?=$sumTotal?></span> ชิ้น</p>
<div style="text-align:right">
<a href ="show_product.php"> <button type="button" class="btn btn-secondary">เลือกสินค้า</button> </a> |
<button type="submit" class="btn btn-primary">ยืนยันการสั่งซื้อ</button>
</div>
    </div>
<br>
<div class="row">
    <div class="col-md-4">
    <div class="alert alert-success" h4 role="alert">
    ข้อมูลสำหรับจัดส่งสินค้า
    </div>
ชื่อ-นามสกุล:
<textarea class="form-control" required name="cus_name" rows="1"><?=$_SESSION["cus_name"]?> <?=$_SESSION["cus_lastname"]?></textarea> <br>
ที่อยู่จัดส่งสินค้า:
<textarea class="form-control" required name="cus_add" rows="3"> <?=$_SESSION["cus_address"]?> </textarea> <br>
เบอร์โทรศัพท์:
<input type="text" name="cus_tel" class="form-control" value="<?php echo $_SESSION["cus_tel"]; ?>"> <br>
<label for="payment_method">ประเภทรถ:</label>
<select name="car_type" class="form-control" required>
    <option value="car1">รถเก๋ง</option>
    <option value="car2">รถกระบะ</option>
    <option value="car3">รถตู้</option>
    <option value="car4">รถ 6 ล้อ</option>
    <option value="car5">รถ 10 ล้อ</option>
    <option value="car6">รถบัส</option>
    <option value="car7">แมคโคร</option>
    <option value="car8">แท็กซี่</option>
    <option value="car9">รถกอร์ฟ</option>
    <option value="car10">เรือ</option>
    <option value="car11">ไฟฉุกเฉิน</option>
    <option value="car12">อื่น ๆ</option>
</select>
<br>
<label></label required>
<input type="radio" name="side" value="left" id="leftOption">
<label for="leftOption">ซื้อไปใส่เอง</label>

<input type="radio" name="side" value="right" id="rightOption">
<label for="rightOption">ทางร้านบริการ</label>
<br>
<br>
<label for="payment_method">เทิร์นแบตเตอรี่:</label>
<select name="turn_battery" class="form-control" required>
    <option value="noturn">ไม่เทิร์นแบตเก่า</option>
    <option value="turn">เทิร์นแบตเก่า</option>
</select>

<br>
<br>
หลักฐานการชำระเงิน:
<input type="file" name="file1" class="form-control">
<br><br><br>
  </div>
</div>
</form>

</body>
</html>