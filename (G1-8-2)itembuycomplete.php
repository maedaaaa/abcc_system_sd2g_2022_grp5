<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itembuycomp</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<?php session_start(); ?>
<!-- header読み込み -->
<?php include_once 'header.php'; ?>


<!-- 注文登録 -->
<?php
    require_once 'DBManager.php';

    $dbmng = new DBManager;
    $orderid = $dbmng->order($_SESSION['customer_id'],$_POST['goukei']);
?>

<!-- 注文詳細登録 -->
<?php
    require_once 'DBManager.php';

    $dbmng = new DBManager;
    
    foreach($_SESSION['item'] as $id=> $product){
        $itemId = $id;
        $searcharray = $dbmng->getItemInfo($itemId);
        foreach($searcharray as $row){
            $dbmng->order_item($row['item_id'],$orderid,$product['count'],$row['item_price']);
        }
    }
?>

<!-- カートセッションの破棄 -->
<?php 
    unset($_SESSION['item']);
?>

<!-- 購入完了表示 -->
<div class="comp">

<h2 style="color:rgb(188, 29, 29);">購入完了</h2>
    <p style="margin-top:40px;">購入が完了しました</p>
    <p>お買い上げありがとうございます</p>
    <a href="(G1-1)toppage.php"><button class="btn-btn-danger">トップページへ戻る</button></a>
</div>