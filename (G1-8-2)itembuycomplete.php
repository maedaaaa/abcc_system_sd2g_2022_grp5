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

<?php
    require_once 'DBManager.php';

    $dbmng = new DBManager;
    $dbmng->addUser($_POST["mail"],$_POST["pass"],$_POST["lastname"],$_POST["firstname"],$_POST["postcode"],$_POST["address"],$_POST["phone"]);

        echo '<h2 style="color:red; margin-left:20%; margin-top:150px">購入完了</h2>';
        echo '<p>購入が完了しました</p>';
        echo '<p>お買い上げありがとうございます。</p>';
        echo '<a href="(G1-1)toppage.php">トップページへ戻る</a>';
?>