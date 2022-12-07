<?php session_start(); ?>

<?php
    
    require_once 'DBManager.php';

    $dbmng = new DBManager;
    $searchArray = $dbmng->logincheck($_POST["mail"]);

    foreach($searchArray as $row){
        if(password_verify($_POST["pass"],$row["customer_password"]) == true &&
        $row["mail"] == $_POST["mail"]){
            $_SESSION['customer_id'] = $row['customer_id'];
            header("Location:(G1-4-2)logincomp.php");   
        }
    }

    if(count($searchArray)==0 || password_verify($_POST["pass"],$row["customer_password"]) == false ){
        header("Location:(G1-4-1)login.php");
    }
?>