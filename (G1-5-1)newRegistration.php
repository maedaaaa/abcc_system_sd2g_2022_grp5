<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new Registration</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>

<!-- header読み込み -->
<?php include_once 'header.php'; ?>

<h2 style="color:rgb(188, 29, 29); margin-left:20%; margin-top:150px">新規登録</h2>

<hr>

<form action="(G1-5-2)newRegistrationcomp.php" method="post" id="newuser">
    
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
    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt3"
             placeholder="mail"name="lastname">
        <label for="txt3">名</label>
    </div>
    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt4"
             placeholder="mail"name="firstname">
        <label for="txt4">姓</label>
    </div>
    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt5"
             placeholder="mail"name="postcode">
        <label for="txt5">郵便番号</label>
    </div>
    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt6"
             placeholder="mail"name="address">
        <label for="txt6">住所</label>
    </div>
    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt7"
             placeholder="mail"name="phone">
        <label for="txt7">電話番号</label>
    </div>

    <input type="submit" class="btn-btn-danger" style="margin-top: 2%; margin-left:45%; margin-bottom:10%;" value="新規登録">

</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>