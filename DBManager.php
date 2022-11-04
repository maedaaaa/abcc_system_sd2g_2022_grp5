<?php
class DBManager{
    //DB接続
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=developmentdb;charset=utf8','webuser','abccsd2');
        return $pdo;
    }

    //商品IDで表示
    public function getItemInfo($getid){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM items WHERE item_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$getid,PDO::PARAM_INT);
        $ps->execute();
        $searcharray = $ps->fetchALL();

        return $searcharray;
    }

    //商品一覧表示
    public function getItemList(){
        $pdo = $this->dbConnect();
        $sql = "SELECT item_id FROM items";
        $ps = $pdo->query($sql);
        $searcharray = $ps->fetchALL();
        $count = count($searcharray);
        require_once 'itemcls.php';
        for($i = 1 ; $i <= $count ; $i++){
          echo '<div class="itemdisplay col-lg-4">';
          $cls = new item();
          $cls-> funcInfo($i);
          echo '</div>';
        }
    }

    //メンズ一覧表示
    public function getMensList(){
        $pdo = $this->dbConnect();
        $sql = "SELECT item_id FROM items WHERE item_gender = 0";
        $ps = $pdo->query($sql);
        $searcharray = $ps->fetchALL();
        require_once 'itemcls.php';
        foreach($searcharray as $row){
            echo '<div class="itemdisplay col-lg-4">';
            $cls = new item();
             $cls-> funcInfo($row["item_id"]);
             echo '</div>';
        }
    }

    //レディース一覧表示
    public function getLadiesList(){
        $pdo = $this->dbConnect();
        $sql = "SELECT item_id FROM items WHERE item_gender = 1";
        $ps = $pdo->query($sql);
        $searcharray = $ps->fetchALL();
        require_once 'itemcls.php';
        foreach($searcharray as $row){
            echo '<div class="itemdisplay col-lg-4">';
            $cls = new item();
             $cls-> funcInfo($row["item_id"]);
             echo '</div>';
        }
    }

    //新規登録
    public function addUser($getmail,$getpass,$getlastname,$getfirstname,$getpostcode,$getaddress,$getphone){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO customers (mail,customer_password,lastname,firstname,postcode,customer_address,phonenumber) VALUE(?,?,?,?,?,?,?)";
    
        $ps = $pdo->prepare($sql);
    
        $ps->bindValue(1,$getmail,PDO::PARAM_STR);
        $ps->bindValue(2,password_hash($getpass,PASSWORD_DEFAULT),PDO::PARAM_STR);
        $ps->bindValue(3,$getlastname,PDO::PARAM_STR);
        $ps->bindValue(4,$getfirstname,PDO::PARAM_STR);
        $ps->bindValue(5,$getpostcode,PDO::PARAM_STR);
        $ps->bindValue(6,$getaddress,PDO::PARAM_STR);
        $ps->bindValue(7,$getphone,PDO::PARAM_STR);
        
        $ps->execute();
    }
}
?>