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
        $userID = $this->getDecodedUserID();
        $sql = "SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where userID = ". $userID . " AND auction_category = 'meble'";
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}