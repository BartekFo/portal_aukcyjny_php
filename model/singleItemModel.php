<?php

class singleItemModel extends mainModel
{
    public function getAuctionDetail($auction_ID)
    {
        $auction_IDTrimmed = ltrim($auction_ID, '/');
        $con = $this->connectDb();
        $sql = "SELECT * FROM auctions where auction_ID = ". $auction_IDTrimmed;
        $result = $con->query($sql);
        return $result->fetch_assoc();
    }
}