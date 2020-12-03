<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
    <?php
        include './connect_db.php';
        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:3;
        $current_page = !empty($_GET['page'])?$_GET['page']:1;
        $offset = ($current_page - 1)*$item_per_page;
        $product = mysqli_query($con, "SELECT * FROM product ORDER BY id ASC LIMIT ".$item_per_page." OFFSET ".$offset);
        $totalRecords = mysqli_query($con, "SELECT * FROM product");
        $totalRecords = $totalRecords -> num_rows;
        $totalPage = ceil($totalRecords/$item_per_page);

        // var_dump($product); exit();
    ?>
    <div class="container div_container">
        <div class="row div_row" style="position: relative;">
            <?php
                while($row = mysqli_fetch_array($product)){ 
            ?>
                <div class="col-md-4 div_col">
                    <img class="images" src="<?= $row['images']?>" alt="">
                    <h4 class="shoes_h4"><?= $row['name']?></h4>
                    <p class="shoes_p"><?= $row['price']?> <del>450.000 VND</del></p>
                    <p><?= $row['content']?></p>
                    <div class="buy_product">
                        <a class="a_buy_product" href="./add_cart.php">Mua sản phẩm</a>
                    </div>
                </div>
            <?php }?>
            <div class="page" style="margin-top: 2%;
    position: absolute;
    right: 0; bottom:-10%;">
                <?php
                    include './pagination.php';
                ?>
            </div>
        </div>   
    </div>
    
</body>
</html>