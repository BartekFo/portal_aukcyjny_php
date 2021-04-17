<?php

class urodaModel extends mainModel
{
    public function urodaTitle()
    {
        return "Uroda";
    }

    public function getUrodaAuctions()
    {
        $con = $this->connectDb();
        $currentDate = date('Y-m-d');
        $sql = "SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where auction_category = 'uroda' AND auction_deadline > '".$currentDate."'";
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}