<?php include 'condb.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.buddle.min.js" ></script>
</head>
<body>
    <?php include 'menu.php';?>
<div class="container">
<br> <br>
    <div class="row">
    <?php
//$sql = "SELECT * FROM product WHERE amount > 0 ORDER BY pro_id";
$sql = "SELECT * FROM product ORDER BY pro_id";
$result = mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($result)){
    $amount1=$row['amount'];

    ?>  
        <div class="col-sm-3">
            <div class="text-center">
            <img src="img/<?=$row['image']?>" width="200px" height="250" class="mt-5 p-2 my-2 border"> <br>
            ID: <?=$row['pro_id']?> <br>
            <h5 class="text-success"> <?=$row['pro_name']?> </h5>
            ราคา <b class="text-danger"> <?=$row['price']?> </b> บาท <br>
<?php
if($amount1 <= 0){ ?>
    <a class="btn btn-danger mt-3 disabled" href="#" > สินค้าหมด </a>
<?php }else{ ?>
    <a class="btn btn-outline-success mt-3 " href="sh_product_detail.php?id=<?=$row['pro_id']?>" > รายละเอียด </a>
<?php } ?>
            </div>
            <br>
        </div>
    <?php
    }
    mysqli_close($conn);
    ?>
    </div>
</div>
    
</body>
</html>