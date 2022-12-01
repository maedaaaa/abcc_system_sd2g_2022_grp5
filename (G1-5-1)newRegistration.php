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
<?php session_start(); ?>
<!-- header読み込み -->
<?php include_once 'header.php'; ?>

<?php 
     require_once 'DBManager.php';

     if(!empty($_POST)){
        if ($_POST['mail'] === "") {
            $error['mail'] = "blank";
        }else if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$_POST['mail'])){
            $error['mail'] = "notmatch";
        }
        if ($_POST['pass'] === "") {
            $error['pass'] = "blank";
        }
        if ($_POST['lastname'] === "") {
            $error['lastname'] = "blank";
        }
        if ($_POST['firstname'] === "") {
            $error['firstname'] = "blank";
        }
        if ($_POST['postcode'] === "") {
            $error['postcode'] = "blank";
        }else if(!preg_match("/^[0-9]{3}-[0-9]{4}$/",$_POST['postcode'])){
            $error['postcode'] = "notmatch";
        }
        if ($_POST['address'] === "") {
            $error['address'] = "blank";
        }
        if ($_POST['phone'] === "") {
            $error['phone'] = "blank";
        }else if(!preg_match("/^[0-9]{10,11}$/",$_POST['phone'])){
            $error['phone'] = "notmatch";
        }

        

        if (!isset($error)) {
            $dbmng = new DBManager;
            $searcharray = $dbmng->customermail($_POST['mail']);
            
            if (COUNT($searcharray) > 0) {
                $error['mail'] = 'duplicate';
            }
        }
        
        if (!isset($error)) {
            $_SESSION['join'] = $_POST;   // フォームの内容をセッションで保存
            header('Location: (G1-5-2)newRegistrationcomp.php');   // 移動
            exit();
        }
     }
?>

<h2 style="color:rgb(188, 29, 29); margin-left:20%; margin-top:150px">新規登録</h2>
<hr>

<form action="(G1-5-1)newRegistration.php" method="post" id="newuser">
    
    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt1"
             placeholder="mail"name="mail">
        <label for="txt1">E-メール</label>
    </div>
    <?php if (!empty($error["mail"]) && $error['mail'] === 'blank'): ?>
                <p class="error">＊メールアドレスを入力してください</p>
            <?php elseif (!empty($error["mail"]) && $error['mail'] === 'duplicate'): ?>
                <p class="error">＊このメールアドレスはすでに登録済みです</p>
                <?php elseif (!empty($error["mail"]) && $error['mail'] === 'notmatch'): ?>   
                    <p class="error">＊メールアドレスの形式ではありません</p>
                    <?php endif ?>

    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt2"
             placeholder="mail"name="pass">
        <label for="txt2">パスワード</label>
    </div>
    <?php if (!empty($error["pass"]) && $error['pass'] === 'blank'): ?>
                    <p class="error">＊パスワードを入力してください</p>
                    <?php endif ?>

    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt3"
             placeholder="mail"name="lastname">
        <label for="txt3">名</label>
    </div>
    <?php if (!empty($error["lastname"]) && $error['lastname'] === 'blank'): ?>
                    <p class="error">＊名を入力してください</p>
                    <?php endif ?>
                    
    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt4"
             placeholder="mail"name="firstname">
        <label for="txt4">姓</label>
    </div>
    <?php if (!empty($error["firstname"]) && $error['firstname'] === 'blank'): ?>
                    <p class="error">＊姓を入力してください</p>
                    <?php endif ?>

    <p style="font-size:12px;">ハイフン(-)を含む８桁</p>
    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt5"
             placeholder="mail"name="postcode">
        <label for="txt5">郵便番号</label>
    </div>
    <?php if (!empty($error["postcode"]) && $error['postcode'] === 'blank'): ?>
                    <p class="error">＊郵便番号を入力してください</p>
                    <?php elseif (!empty($error["postcode"]) && $error['postcode'] === 'notmatch'): ?>   
                    <p class="error">＊郵便番号の形式ではありません</p>
                    <?php endif ?>

    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt6"
             placeholder="mail"name="address">
        <label for="txt6">住所</label>
    </div>
    <?php if (!empty($error["address"]) && $error['address'] === 'blank'): ?>
                    <p class="error">＊住所を入力してください</p>
                    <?php endif ?>
    
                    <p style="font-size:12px;">ハイフン(-)なしの半角数字</p>
    <div class="txtBox form-floating">
        <input type="text" class="form-control" id="txt7"
             placeholder="mail"name="phone">
        <label for="txt7">電話番号</label>
    </div>
    <?php if (!empty($error["phone"]) && $error['phone'] === 'blank'): ?>
                    <p class="error">＊電話番号を入力してください</p>
                    <?php elseif (!empty($error["phone"]) && $error['phone'] === 'notmatch'): ?>   
                    <p class="error">＊電話番号の形式ではありません</p>
                    <?php endif ?>


    
<div style="text-align: center;">
 <input type="submit" class ="btn-btn-danger" style="margin-bottom:10%;" value="新規登録">
 </div>

</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>