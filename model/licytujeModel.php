<?php

class licytujeModel extends mainModel
{
    public function getAuctionedAuctions() {
        $con = $this->connectDb();
        $currentDate = date('Y-m-d');
        $userID = $this->getDecodedUserID();
        $sql = 'SELECT auctions.auction_ID, auctions.auction_name, auctions.auction_image_name, auctions.auction_actual_price FROM auctions, auctioned WHERE auctioned.auctioned_user_id = '.$userID.' AND auctions.auction_ID = auctioned.auctioned_auction_id AND auctions.auction_deadline > \''.$currentDate.'\'';
        $result = $con->query($sql);
        return $result->fetch_all();
    }
}