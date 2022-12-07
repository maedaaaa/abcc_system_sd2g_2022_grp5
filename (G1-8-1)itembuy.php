<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itembuy</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>


<!-- header読み込み -->
<?php include_once 'header.php'; ?>

<!-- ログインチェック -->
<?php 
    if(isset($_SESSION["customer_id"]) == false){
        header("Location:(G1-4-1)login.php");
    }
?>

<?php 
require_once 'DBManager.php';
$dbmng = new DBManager();

$sum = 0;

    foreach($_SESSION['item'] as $id=> $product){
        $itemId = $id;
        $searcharray = $dbmng->getItemInfo($itemId);
        foreach($searcharray as $row){      
        $sum = $sum + $row["item_price"] * $product['count'];
        }
    }
?>

<div class="itembuy">
                <div class="cart-info2">
                    <p>注文の概要</p>
                </div>
            <p class="money">小計</p>
            <p class="money2"> <?php echo '¥ '.number_format($sum )?></p>
            <p class="money">配送・お渡し</p>
            <p class="money2"> <?php echo '¥ '.$postage = 0 ?></p>
            <p class="money">税込み</p>
            <p class="money2"> <?php echo '¥ '.number_format($tax = $sum * 0.1)?></p>
            <p class="money">合計</p>
            <p class="money2"> <?php echo '¥ '.number_format($money = $tax + $sum + $postage)?></p>
            <div style="padding:2%;">
            <form action="(G1-8-2)itembuycomplete.php" method="post">
                <input type="hidden" name="goukei" value="<?php echo $money ?>">
                <a href="(G1-8-2)itembuycomplete.php"><button class="btn-btn-danger"  style="width:100%;">購入する</button></a>
            </form>  
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>