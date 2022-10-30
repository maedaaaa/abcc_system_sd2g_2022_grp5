<?php
class DBManager{
    //DB接続
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=developmentdb;charset=utf8','webuser','abccsd2');
        return $pdo;
    }

    //商品表示フォーマット
    public function getItemInfo($getid){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM items WHERE item_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$getid,PDO::PARAM_INT);
        $ps->execute();
        $searcharray = $ps->fetchALL();

        return $searcharray;
    }

}
?>