✨<?php session_start(); ?>

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


<!-- header読み込み -->
<?php include_once 'header.php'; ?>

<!-- 受け取ったPOSTをセッションに保存 -->
<?php 
    
    $id = $_POST["id"];
    if(!isset($_SESSION['item'])){
        $_SESSION['item']=[];
    }
    $count=0;
    if(isset($_SESSION['item'][$id])){
        $count=$_SESSION['item'][$id]['count'];
    }
    $_SESSION['item'][$id]=['count'=>$count + $_POST['count']];

?>

<!-- ページ表示 -->
<div class="comp">
<!-- <h2 style="color:rgb(188, 29, 29);">カートに追加</h2>
    <p style="margin-top:40px;">カートに商品を追加しました。</p>
    <p>引き続きショッピングをお楽しみください</p>
    <a href="(G1-7)cart.php"><button class="btn-btn-danger">カートを見る</button></a> -->

    <h2 style="color:rgb(188, 29, 29); margin-right:50%;">カートに追加</h2>
<hr>
    <p style="margin-top:40px;">カートに商品を追加しました。</p>
    <p>引き続きショッピングをお楽しみください</p>

    <a href="(G1-7)cart.php">カートを確認する</a> <br>
    <div style="margin-top:5px;">

    <a href="(G1-1)toppage.php">トップページへ戻る</a> 

</div>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
