<?php

class homeModel extends mainModel
{
    public function homeTitle()
    {
        return "Wszystkie produkty";
    }

    public function getAllAuctions() {
        $con = $this->connectDb();
        $this->deleteOlderAuctions();
        $sql = 'SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions';
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}