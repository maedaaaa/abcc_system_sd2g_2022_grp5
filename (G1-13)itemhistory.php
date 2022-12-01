<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itemlist</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<?php session_start(); ?>
<!-- header読み込み -->
<?php include_once 'header.php'; ?>

<?php

    if(!isset($_SESSION['customer_id'])){
        header("Location:(G1-4-1)login.php");
    }
?>

<p class="border" style="margin-top:150px;">商品購入履歴</p>

<?php
    require_once 'DBManager.php';

    $dbmng = new DBManager;
    $searcharray = $dbmng->itemHistory($_SESSION['customer_id']);
    if(count($searcharray)==0){
        echo '<p class="pHis">現在、ご購入された商品はございません</p>';
    }
    
    foreach($searcharray as $row){
        echo '<div class="itemhistory row">';

        echo '<div class="col-6">';
        echo '<p>購入日：'.$row["order_item_date"].'</p>';
        echo '<p>商品番号：'.$row["item_id"].'</p>';
        echo '<p>商品名：'.$row["item_name"].'</p>';
        echo '<p>商品価格：'.$row["purchase_price"].'円</p>';
        echo '<p>購入個数：'.$row["order_item_quantity"].'</p>';
        echo '</div>';

        echo '<div class="col-6">';
        echo '<img class="hisimg" src = "./img/'.$row["item_img"].'" > ';
        echo '</div>';
        echo '</div>';
    }
?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>