<?php

class ubraniaModel extends mainModel
{
    public function ubraniaTitle()
    {
        return "Ubrania";
    }

    public function getUbraniaAuctions()
    {
        $con = $this->connectDb();
        $userID = $this->getDecodedUserID();
        $sql = "SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where userID = ". $userID . " AND auction_category = 'ubrania'";
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}