<?php
session_start();
if(!isset($_SESSION["emp_userid"]))
{
$show=header("location:login.php");
}
?>

<?php include 'condb.php'; ?>
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





                        <div class="card mb-4">
                            <div class="card-header">
                               <div>
                            </div>
                            <div class="card-body">
    <div class="row">
        <div class="col-sm-4">
    <div class="alert alert-primary h4" role="alert">
    เพิ่มสินค้า
    </div>
<form name="form1" method="post" action="insert_product.php" enctype="multipart/form-data">
 <label>รหัสสินค้า: </label>
 <input type="text" name="pid" class="form-control" placeholder="รหัสสินค้า..." required > <br>
 <label>ชื่อสินค้า: </label>
 <input type="text" name="pname" class="form-control" placeholder="ชื่อสินค้า..." required > <br>
 <label>รายละเอียดสินค้า: </label>
 <textarea class="form-control" name ="detail" placeholder="รายละเอียดสินค้า..." required></textarea>
 <label>ประเภทสินค้า: </label>
 <select class="form-select" name="typeID">
  <?php
$sql="SELECT * FROM type ORDER BY type_name";
$hand=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){


  ?>
  <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option>
  <?php
}
mysqli_close($conn);
  ?>
</select>

<label>ราคา: </label>
 <input type="number" name="price" class="form-control" placeholder="ราคา..." required > <br>
 <label>จำนวน: </label>
 <input type="number" name="num" class="form-control" placeholder="จำนวน..." required > <br>
 <label>รูปภาพ: </label>
 <input type="file" name="file1" required > <br> <br>

<button type="submit" class="btn btn-primary">submit</button>
<a class="btn btn-danger" href="show_product.php" role="button">Cancel</a>
</form>





</div>
</div>

                            </div>
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

<script>
function del(mypage){
    var agree=confirm('คุณต้องการยกเลิกใบสั่งซื้อสินค้าหรือไม่');
    if(agree){
        window.location=mypage;
    }
}
function del1(mypage1){
    var agree=confirm('คุณต้องการปรับสถานะการชำระเงินหรือไม่');
    if(agree){
        window.location=mypage1;
    }
}
</script>