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
        $userID = $this->getDecodedUserID();
        $sql = "SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where userID = ". $userID . " AND auction_category = 'zdrowie'";
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}