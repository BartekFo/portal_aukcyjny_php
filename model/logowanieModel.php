<?php

class logowanieModel extends mainModel
{
    public function checkLogin()
    {
        $con = $this->connectDb();
        if(!is_null($con)){
            $sql = "SELECT idusers FROM users WHERE email = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('s', $_POST['email']);
            $stmt->execute();
            $stmt->store_result();
            if($stmt->num_rows > 0) {
                $stmt->bind_result($id);
                $stmt->fetch();
                $sql = "SELECT password FROM users WHERE idusers = ?";
                $stmt->free_result();
                $stmt = $con->prepare($sql);
                $stmt->bind_param('s', $id);
                $stmt->execute();
                $stmt->store_result();
                if($stmt->num_rows() > 0) {
                    $stmt->bind_result($password);
                    $stmt->fetch();
                    $stmt->free_result();
                    if(password_verify($_POST['pwd'], $password)) {
                        $stmt->close();
                        $con->close();
                        $this->setToken($id);
                        setcookie('id', $id, 2147483647);
                        $this->setSession($userID, $email, $this->token);
                        return true;
                    } else {
                        $stmt->close();
                        $con->close();
                        return false;
                    }
                } else {
                    $stmt->close();
                    $con->close();
                    return false;
                }
            } else {
                $con->close();
                return false;
            }
        } else {
            $con->close();
            return false;
        }
    }
}