<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itempage</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>

<!-- header読み込み -->
<?php include_once 'header.php'; ?>

<?php
    require_once 'DBManager.php';
    $dbmng = new DBManager();
    $searcharray = $dbmng->getItemInfo($_GET['id']);
?>

<div class="second row">   
    <div class="col-lg-6 text-center">
        <?php
            foreach($searcharray as $row){
                echo '<img src="./img/'.$row["item_img"].'" class="itemimgone">';
            }
        ?>
    </div>

    <div class="col-lg-6 text-center" style="margin-top:100px;">
        <?php
            foreach($searcharray as $row){
                echo '<h2>'.$row["item_name"].'</h2>';
                echo '<p>￥'.$row["item_price"].'</p>';
            }
        ?>
    </div>
</div>
    
<div class="second row"> 
    <div class="col-lg-6 text-center" style="padding:5%;">
        <h2 style="color:rgb(188, 29, 29);">商品説明</h2>
        <?php
            foreach($searcharray as $row){
                echo '<p style="color: gray;">'.$row["item_description"].'</p>';
            }
        ?>
    </div>

    <div class="col-lg-6 text-center">

    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
