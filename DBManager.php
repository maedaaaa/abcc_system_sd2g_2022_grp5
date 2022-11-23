<?php
class DBManager{
    //DB接続
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=developmentdb;charset=utf8','webuser','abccsd2');
        return $pdo;
    }

    //商品IDで検索
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

    //ログインチェック
    public function logincheck($getmail){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM customers WHERE mail = ?";

        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$getmail,PDO::PARAM_STR);
        $ps->execute();

        $searchArray = $ps->fetchALL();
        return $searchArray;
    }

    // 注文
    public function order($getcustomer_id,$getorder_value){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO orders (customer_id,order_date,postage,order_value) VALUE(?,?,?,?)";

        $ps = $pdo->prepare($sql);
    
        $ps->bindValue(1,$getcustomer_id,PDO::PARAM_INT);
        $ps->bindValue(2,date('Y-m-d'),PDO::PARAM_STR);
        $ps->bindValue(3,0,PDO::PARAM_INT);
        $ps->bindValue(4,$getorder_value,PDO::PARAM_INT);
        
        $ps->execute();

        $orderid = $pdo -> lastInsertId();
        return $orderid;
    }

    //注文詳細
    public function order_item($getitem_id,$getorder_id,$getorder_item_quantity,$getpurchase_price){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO order_items (item_id,order_id,order_item_quantity,order_item_date,purchase_price) VALUE(?,?,?,?,?)";
        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$getitem_id,PDO::PARAM_INT);
        $ps->bindValue(2,$getorder_id,PDO::PARAM_INT);
        $ps->bindValue(3,$getorder_item_quantity,PDO::PARAM_INT);
        $ps->bindValue(4,date('Y-m-d'),PDO::PARAM_STR);
        $ps->bindValue(5,$getpurchase_price,PDO::PARAM_INT);
        
        $ps->execute();
    }

    //購入履歴
    public function itemHistory($getcustomer_id){
        $pdo = $this->dbConnect();

        $sql ="SELECT * FROM order_items AS OI INNER JOIN 
        orders AS O ON OI.order_id = O.order_id INNER JOIN 
        items AS I ON OI.item_id = I.item_id WHERE O.customer_id = ?
        ORDER BY OI.order_id ASC";

        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$getcustomer_id,PDO::PARAM_INT);
        
        $ps->execute();
        $searcharray = $ps->fetchALL();

        return $searcharray;
    }
}
?>
