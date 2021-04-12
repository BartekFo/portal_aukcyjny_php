<?php

class wystawiamModel extends mainModel
{
    public function getUserIssuedAuctions () {
        $con = $this->connectDb();
        $userID = $this->getDecodedUserID();
        $sql = "SELECT auction_ID, auction_name, auction_image_name, auction_actual_price FROM auctions where userID = ". $userID;
        $result = $con->query($sql);
        return $result->fetch_all();
    }

    public function deleteSingleAuction() :bool {
        $con = $this->connectDb();
        $userID = $this->getDecodedUserID();
        $auctionID = $_POST['auctionID'];
        $sql = "SELECT userID FROM auctions";
        $result = $con->query($sql) or die("Unable to connect");
        $result = $result->fetch_assoc();
        if ($userID === $result['userID']) {
            $sql = "DELETE FROM auctions WHERE auction_ID = ".$auctionID;
            $con->query($sql) or die("Error");
            return true;
        } else {
            return false;
        }
    }

}