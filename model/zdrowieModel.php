<?php

class zdrowieModel extends mainModel
{
    public function zdrowieTitle()
    {
        return "Zdrowie";
    }

    public function getZdrowieAuctions()
    {
        $con = $this->connectDb();
        $currentDate = date('Y-m-d');
        $sql = "SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where auction_category = 'zdrowie' AND auction_deadline > '".$currentDate."'";
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}