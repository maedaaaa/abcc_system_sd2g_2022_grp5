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

<h2 style="color:rgb(188, 29, 29); margin-left:20%; margin-top:150px">カート件数( <?php echo count($_SESSION["item"]); ?> )</h2>

<!-- カート表示 -->
<?php 
require_once 'DBManager.php';
$dbmng = new DBManager();

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
        echo        '¥'.$row["item_price"].'<br>';
        echo        $product['count'].'ケ';
        echo    '</div>';
        echo '</div>';
        }
    }
?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>