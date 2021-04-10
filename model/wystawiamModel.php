<?php

class wystawiamModel extends mainModel
{
    public function getUserIssuedAuctions () {
        $con = $this->connectDb();
        $userID = $this->getDecodedUserID();
        $sql = "SELECT auction_name, auction_image_name, auction_starting"
    }
}