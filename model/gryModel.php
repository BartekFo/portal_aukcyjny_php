<?php
class gryModel extends mainModel
{
    public function gryTitle()
    {
        return "Gry";
    }

    public function getGryAuctions()
    {
        $con = $this->connectDb();
        $userID = $this->getDecodedUserID();
        $currentDate = date('Y-m-d');
        $sql = "SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where userID = ". $userID . " AND auction_category = 'gry' AND auction_deadline > '".$currentDate."'";
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}