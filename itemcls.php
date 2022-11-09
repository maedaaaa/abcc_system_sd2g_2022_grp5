<?php
class item{
        //商品表示フォーマット
    public function funcInfo($id){
        require_once 'DBManager.php';
        $dbmng = new DBManager();
        $searcharray = $dbmng->getItemInfo($id);

        foreach($searcharray as $row){
            echo '<a href="(G1-3-1)itempage.php?id='.$row["item_id"].'" class="alink">';
            echo '<img src = "./img/'.$row["item_img"].'" class="itemimg"> ';
            echo '<h3 class="fw-normal mt-4">'.$row["item_name"].'</h3></a>';
            echo '<p class="mt-4">￥'.$row["item_price"].'</p>';
        }   
    }
}
?>
