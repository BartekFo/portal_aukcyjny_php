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

    public function bidAuction($auction_ID) {
        $auction_IDTrimmed = ltrim($auction_ID, '/');
        $con = $this->connectDb();
        $sql = "SELECT auction_actual_price FROM auctions where auction_ID = ". $auction_IDTrimmed;
        $result = $con->query($sql);
        $result = $result->fetch_assoc();
        $result = $result['auction_actual_price'];
        $newPrice = $_POST['price'];
        if ($result >= $newPrice) {
            return false;
        } else {
            $userID = $this->getDecodedUserID();
            $sql = 'UPDATE auctions SET auction_actual_price = ?, auction_winning_user = ? where auction_ID = ?';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('iii', $newPrice, $userID , $auction_IDTrimmed);
            $stmt->execute();

            $sql = "SELECT auctioned_auction_id, auctioned_user_id FROM auctioned where auctioned_auction_id = ". $auction_IDTrimmed ." and auctioned_user_id = " . $userID;
            $result = $con->query($sql);
            if ($result->num_rows < 1) {
                $sql = 'INSERT INTO auctioned (auctioned_auction_id, auctioned_user_id) VALUES ('.$auction_IDTrimmed.', '. $userID .')';
                $con->query($sql);
            }
            return true;
        }
    }
}