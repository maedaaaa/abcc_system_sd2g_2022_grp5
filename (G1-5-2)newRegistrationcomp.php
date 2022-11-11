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

        echo '<h2 style="color:rgb(188, 29, 29); margin-left:20%; margin-top:150px">新規登録完了</h2>';

        echo'<hr>';
        
        echo '<p style="text-align: center; font-size: 20px; margin-bottom:50px; margin-top:50px">登録が完了しました<br>ありがとうございます</p>';
        // echo '<p>ありがとうございます。</p>';
        echo '<a href="(G1-1)toppage.php" style="margin-left:46%; margin-top:50px">トップページへ戻る</a>';
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>