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
        <div class="row">
        <?php
        $ids=$_GET['id'];
$sql = "SELECT * FROM product, type WHERE product.type_id= type.type_id and product.pro_id='$ids' ";
$result = mysqli_query($conn,$sql); 
($row=mysqli_fetch_array($result));

    ?>  
            <div class="col-md-4">
                <img src="img/<?=$row['image']?>" width="350px" class="mt-3 p-2 my-2 border" />
            </div>
            
            <div class="col-md-6">
                <br> <br>
            ID: <?=$row['pro_id']?> <br>
            <h5 class="text-success"> <?=$row['pro_name']?> </h5>
            ประเภทสินค้า : <?=$row['type_name']?> <br>
            รายละเอียด : <?=$row['detail']?> <br>
            ราคา <b class="text-danger"> <?=$row['price']?> </b> บาท <br>
            <a class="btn btn-outline-success mt-3 " href="order.php?id=<?=$row['pro_id']?>" > Add Cart </a>
            </div>
        </div>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>