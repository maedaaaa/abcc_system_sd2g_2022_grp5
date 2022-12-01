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
    require_once 'DBManager.php';
    
    if (!isset($_SESSION['join'])) {
        header('Location: (G1-5-1)newRegistration.php');
        exit();
    }


    $dbmng = new DBManager;
    $dbmng->addUser($_SESSION['join']["mail"],$_SESSION['join']["pass"],$_SESSION['join']["lastname"],
        $_SESSION['join']["firstname"],$_SESSION['join']["postcode"],$_SESSION['join']["address"],$_SESSION['join']["phone"]);

        $searchArray = $dbmng->logincheck($_SESSION['join']["mail"]);
    
        foreach($searchArray as $row){   
                $_SESSION['customer_id'] = $row['customer_id'];
        }

        echo '<h2 style="color:rgb(188, 29, 29); margin-left:20%; margin-top:150px">新規登録完了</h2>';

        echo'<hr>';
        
        echo '<p style="text-align: center; font-size: 17px; margin-bottom:5px; margin-top:40px">登録が完了しました</p>';
        echo '<p style="text-align: center; font-size: 17px; margin-bottom:25px; margin-top:10px">ありがとうございます</p>';
       
        echo '<div style="text-align: center;"><a href="(G1-1)toppage.php">トップページへ戻る</a></div>';

        unset($_SESSION['join']);
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>