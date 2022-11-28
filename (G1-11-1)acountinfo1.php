<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acountinfo1</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>

<!-- header読み込み -->
<?php include_once 'header.php'; ?>

<?php 
    session_start();

    if(!isset($_SESSION['customer_id'])){
        header("Location:(G1-7)cart.php");
    }
?>

<h2 style="color: rgb(188, 29, 29); margin-left:20%; margin-top:150px">お客様情報</h2>

<?php
    require_once 'DBManager.php';

    $dbmng = new DBManager;
    $searcharray = $dbmng->getcustomer($_SESSION['customer_id']);
?>

<?php
    foreach($searcharray as $row){
        echo '<div class="cusinfoparent">';
        echo '<p class="cusinfo">お名前</p>';
        echo '<p class="cusinfo2">'.$row['firstname'].$row['lastname'].'</p>';
        echo '<p class="cusinfo">郵便番号</p>';
        echo '<p class="cusinfo2">'.$row['postcode'].'</p>';
        echo '<p class="cusinfo">住所</p>';
        echo '<p class="cusinfo2">'.$row['customer_address'].'</p>';
        echo '<p class="cusinfo">電話番号</p>';
        echo '<p class="cusinfo2">'.$row['phonenumber'].'</p>';
        echo '</div>';
    }
?>

<div class="text-center" style="margin-top:5%;">
    <a href="(G1-10)mypage.php"><button class="btn-btn-danger" >戻る</button></a>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>