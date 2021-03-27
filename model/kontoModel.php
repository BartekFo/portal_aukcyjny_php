<?php

class kontoModel extends mainModel
{
    public string $nameAndSurname;
    public function getUser()
    {
        $con = $this->connectDb();
        $userID = $_COOKIE['id'];
        $sql = "SELECT * FROM users WHERE idusers = ".  $userID;
        $result = $con->query($sql);
        return $result->fetch_assoc();
    }

    public function getNameAndSurname()
    {
        if (isset($this->nameAndSurname))
        {
            return $this->nameAndSurname;
        }
    }

    public function getEmail(){
        $arr = $this->getUser();
        return $arr['email'];
    }

    public function getPhoneNumber(){
        $arr = $this->getUser();
        return $arr['number'];
    }

    public function getStreet(){
        $arr = $this->getUser();
        return $arr['street'];
    }


}