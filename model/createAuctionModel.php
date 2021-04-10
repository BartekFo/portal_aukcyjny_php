<?php


class createAuctionModel extends mainModel
{
    public function addAuction() : bool
    {
        $con = $this->connectDb();
        $userID = $this->getDecodedUserID();
        $name = $_POST['itemName'];
        $description = $_POST['itemDescription'];
        $price = $_POST['itemPrice'];
        $category = $_POST['cateogryOfProduct'];
        $date = $_POST['deadline'];
        $stateOfUse = $_POST['stateOfUse'];
        $delivery = $_POST['delivery'];
        $imageName = md5($userID . microtime());

        $strDelivery = implode(", ", $delivery);

        if (!is_null($con)) {
            $maxsize = 1024 * 1024 * 1024;
            $roz = explode("/", $_FILES['image']['type']);
            if (is_uploaded_file($_FILES['image']['tmp_name'])){
                if ($_FILES['image']['size'] > $maxsize) {
                    return false;
                } else {
                    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/auctionImages/" . $imageName . "." . $roz[1]);
                    $sql = "INSERT INTO auctions VALUES (NULL,?,?,?,?,?,?,?,?,?)";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param('dsssdssss', $userID, $name, $imageName, $description, $price, $category, $date, $stateOfUse, $strDelivery);
                    $stmt->execute();
                    return true;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}