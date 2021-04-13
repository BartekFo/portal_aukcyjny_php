<?php

class rtvagdModel extends mainModel
{
    public function rtvagdTitle()
    {
        return "RTV i AGD";
    }

    public function getRtvagdAuctions()
    {
        $con = $this->connectDb();
        $userID = $this->getDecodedUserID();
        $sql = "SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where userID = ". $userID . " AND auction_category = 'rtvagd'";
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}