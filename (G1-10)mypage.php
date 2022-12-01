<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    
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
        header("Location:(G1-7)cart.php");
    }
?>


<h2 style="color: rgb(188, 29, 29); margin-left:20%; margin-top:150px">マイページ</h2>
   
<hr>

<div class="My">

    <a href="(G1-13)itemhistory.php"  class="alink">
        <div class="mypage">
            <p>ご購入履歴</p>
        </div>
    </a>

    <a href="(G1-11-1)acountinfo1.php"  class="alink">
        <div class="mypage">
            <p>お客様情報</p>
        </div>
    </a>

</div>

<div class="text-center" style="margin-top:5%;">
    <a href="(G1-12-1)logout.php"><button class="btn-btn-danger" >ログアウト</button></a>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>