<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">

</head>
<body>

<?php session_start(); ?>
<!-- header読み込み -->
<?php include_once 'header.php'; ?>

<!-- カートセッションに情報がない場合cart2に遷移 -->
<?php if(!isset($_SESSION['item'])){
        header("Location:(G1-7)cart2.php");
    }
?>

<!-- カート件数 -->
<h2 style="color:rgb(188, 29, 29); margin-top:150px; margin-left:10%;">カート件数( <?php echo count($_SESSION["item"]); ?> )</h2>


<div class="row">
    <div class="col-lg-7">
<!-- カート表示 -->
<?php 
require_once 'DBManager.php';
$dbmng = new DBManager();

$sum = 0;

    foreach($_SESSION['item'] as $id=> $product){
        $itemId = $id;
        $searcharray = $dbmng->getItemInfo($itemId);
        foreach($searcharray as $row){
        echo '<div class="cart row">';
        echo    '<div class="cart-div col-6">';
        echo        '<img class="cartimg" src = "./img/'.$row["item_img"].'" > ';
        echo    '</div>';
        echo    '<div class="cart-div col-6">';
        echo        '<h3 style="margin-top:15%;">'.$row["item_name"].'</h3>';
        echo        '<p style="margin-top:10%">¥'.$row["item_price"].'</p>';
        echo        $product['count'].'品';
        echo    '</div>';
        echo '</div>';
        $sum = $sum + $row["item_price"] * $product['count'];
        }
    }
?>
    </div>

<!-- 注文概要 -->
    <div class="col-lg-5">
        <div class="cart-info">
                <div class="cart-info2">
                    <p>注文の概要</p>
                </div>
            <p class="money">小計</p>
            <p class="money2"> <?php echo '¥ '.$sum ?></p>
            <p class="money">配送・お渡し</p>
            <p class="money2"> <?php echo '¥ '.$postage = 0 ?></p>
            <p class="money">税込み</p>
            <p class="money2"> <?php echo '¥ '.$tax = $sum * 0.1?></p>
            <p class="money">合計</p>
            <p class="money2"> <?php echo '¥ '.$money = $tax + $sum + $postage?></p>
            <div style="padding:2%;">
            <button class="btn-btn-danger" onclick="logincheck()" style="width:100%;">購入手続きへ</button>

            <!-- ボタン押下時の動き -->
            <script>
             function logincheck() {
                var loginId = <?php phplogincheck(); ?>;
                  if(loginId == true){
                    location.href = "(G1-8-1)itembuy.php";;
                  }else{
                    alert("購入手続きへ進むにはログインが必要です");
                  }
             }
            </script>

            <!-- ログインチェック -->
            <?php
                function phplogincheck(){
                    if(isset($_SESSION["customer_id"]) == true){
                        echo 'true';
                    }else{
                        echo 'false';
                    }
                }
            ?>

        
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>