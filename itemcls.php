<?php
class item{
    public function funcInfo($id){
        require_once 'DBManager.php';
        $dbmng = new DBManager();
        $searcharray = $dbmng->getItemInfo($id);

        foreach($searcharray as $row){
            echo '<img src = "./img/'.$row["item_img"].'" class="itemimg"> ';
            echo '<h3 class="fw-normal mt-4">'.$row["item_name"].'</h3>';
            echo '<p class="mt-4">￥'.$row["item_price"].'</p>';
        }   
    }
}
?>