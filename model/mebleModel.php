<?php

class mebleModel extends mainModel
{
    public function mebleTitle()
    {
        return "Meble";
    }

    public function getMebleAuctions()
    {
        $con = $this->connectDb();
        $currentDate = date('Y-m-d');
        $sql = "SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where auction_category = 'meble' AND auction_deadline > '".$currentDate."'";
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}