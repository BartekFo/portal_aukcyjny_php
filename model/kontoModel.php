<?php

class kontoModel extends mainModel
{
    public function getUser()
    {
        $con = $this->connectDb();
        $dehashedID = $this->getDecodedUserID();
        $sql = "SELECT * FROM users WHERE idusers = ".  $dehashedID;
        $result = $con->query($sql);
        $con->close();
        return $result->fetch_assoc();
    }

    public function updateUserData()
    {
        $nameAndSurname = $_POST['nameAndSurname'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $street = $_POST['street'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];

        $con = $this->connectDb();
        $dehashedID = $this->getDecodedUserID();
        $sql = 'UPDATE users SET name_surname = ?, email = ?, number = ?, street = ?, zip_code = ?, city = ? WHERE idusers = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('ssisssd', $nameAndSurname, $email, $phoneNumber, $street, $zip, $city, $dehashedID);
        $stmt->execute();
        if($stmt->num_rows < 0) {
            $stmt->close();
            $con->close();
            return false;
        } else {
            $stmt->close();
            $con->close();
            return true;
        }

    }

}