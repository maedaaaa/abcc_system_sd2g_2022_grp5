<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart2</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>

<?php session_start(); ?>
<!-- header読み込み -->

<?php include_once 'header.php'; ?>

<!-- カートセッションに情報がある場合cartに遷移 -->
<?php if(isset($_SESSION['item'])){
        header("Location:(G1-7)cart.php");
    }
?>

    <h2 style="color:rgb(188, 29, 29); margin-top:150px; margin-left:10%;">カート</h2>
    <hr>

    <div class="cartzero">
        <p>現在、買い物かごに商品が入っていません。</p>
        <p>お買い物を続けるには下の「お買い物を続ける」をクリックしてください。</p>
    </div>

    <a href="(G1-1)toppage.php"><button class="btn-btn-danger" style="margin-left:10%;">お買い物を続ける</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>