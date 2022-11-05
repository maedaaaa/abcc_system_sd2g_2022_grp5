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
    session_start();
    if(isset($_SESSION["pass"]) == true){
        header("Location:(G1-10)mypage.php");
    }
?>

<h2 style="color:red; margin-left:20%; margin-top:150px">ログイン</h2>

<form action="logincheck.php" method="post" id="newuser">
    <p>アカウントをお持ちの方</p>

    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt1"
             placeholder="mail"name="mail">
        <label for="txt1">E-メール</label>
    </div>
    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt2"
             placeholder="mail"name="pass">
        <label for="txt2">パスワード</label>
    </div>

    <input type="submit" class="btn btn-danger" style="margin-top: 5%; margin-left:30%;" value="ログイン">   
    
</form>

<div id="newuser">
<p style="margin-top: 5%;">アカウントをお持ちでない方</p>

<a href="(G1-5-1)newRegistration.php" style="margin-top: 3%; margin-left:30%; margin-bottom:10%;"><button class="btn btn-danger" >新規登録へ</button></a>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>