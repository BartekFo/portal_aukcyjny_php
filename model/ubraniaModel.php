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
        $currentDate = date('Y-m-d');
        $sql = "SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where auction_category = 'ubrania' AND auction_deadline > '".$currentDate."'";
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}