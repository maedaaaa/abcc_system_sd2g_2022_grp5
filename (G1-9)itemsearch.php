<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itemsearch</title>

    
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
    $searcharray = $dbmng->itemSearch($_POST['itemsearch']);
?>


<?php
    echo '<h2 style="color:rgb(188, 29, 29); margin-left:20%; margin-top:150px">検索結果( '.COUNT($searcharray).' )件</h2>';
?>

<br>

<div class="row">
<?php
    require_once 'itemcls.php';
    foreach($searcharray as $row){
        echo '<div class="itemdisplay col-lg-4">';
        $cls = new item();
        $cls-> funcInfo($row["item_id"]);
        echo '</div>';
    }
?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>