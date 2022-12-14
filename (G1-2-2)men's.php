<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>men's</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/botan.css">
</head>
<body>

<!-- header読み込み -->
<?php include_once 'header.php'; ?>

<!-- メンズ見出し -->
<div class ="second row">
    
    <div class="col-12"  style="text-align:right; padding-right:60px;">
        <a href="(G1-2-1)itemlist.php" class="btnlinestretches3"><span>商品一覧</span></a>
        <a href="(G1-2-3)ladies.php" class="btnlinestretches3"><span>レディース</span></a>
    </div>
</div>

<br>
    
    
    <img src="img/m0328_001395 (1).jpg" class="imgs" style="width: 100%; height:600px; object-fit: cover;" loop autoplay muted>
    <h1 class="img-men-h1">Watches for men</h1>
    


    <div id="container">
    <p class="border">メンズウォッチセレクション</p>
    </div>

    <hr>

</div>


<!-- 商品表示 -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <?php
        require_once 'DBManager.php';
        $dbmng = new DBManager();
        $dbmng->getMensList();
        ?>    
    </div><!-- /.row -->

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>