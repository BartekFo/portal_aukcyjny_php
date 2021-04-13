<?php

class homeModel extends mainModel
{
    public function homeTitle()
    {
        return "Wszystkie produkty";
    }

    public function getAllAuctions() {
        $con = $this->connectDb();
        $currentDate = date('Y-m-d');
        $sql = 'SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where auction_deadline > \''.$currentDate.'\'';
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}