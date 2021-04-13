<?php

class mainModel
{
    protected string $token;

    public function connectDb(): ?mysqli
    {
        $host = 'localhost';
        $user = 'root';
        $pwd = '';
        $dbName = "portal_aukcyjny";

        $mysqli = new mysqli($host, $user, $pwd, $dbName);

        if (mysqli_connect_errno()) {
            printf('Błąd połączenia z bazą ', mysqli_connect_error());
            return null;
        } else {
            return $mysqli;
        }
    }

    public function setToken($id): bool
    {
        $con = $this->connectDb();
        try {
            $token = bin2hex(random_bytes(16));
            $this->token = $token;
            $date = date("Y-m-d H:i:s");
            $sql = "INSERT INTO tokens VALUES (NULL,'" . $id . "' , '" . $token . "', '" . $date . "')";
            echo $sql;
            $result = $con->query($sql);
            if ($result) {
                $sql = 'SELECT idtokens FROM tokens ORDER BY idtokens LIMIT 1';
                $result = $con->query($sql);
                $resArr = $result->fetch_array();
                $tokenID = $resArr[0];
                $hasehedTokenID = base64_encode($tokenID);
                $con->close();
                setcookie('tokenID', $hasehedTokenID, 2147483647);
                return true;
            } else {
                $con->close();
                return false;
            }
        } catch (Exception $e) {
            print_r("error: " . $e);
        }
    }

    public function getToken()
    {
        $tokenID = $this->getTokenFromCookie();
        $con = $this->connectDb();
        $sql = "SELECT token_value FROM tokens WHERE idtokens = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('d', $tokenID);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($token);
        $stmt->fetch();
        $stmt->free_result();
        $con->close();
        return $token;
    }

    public function getDecodedUserID()
    {
        return base64_decode($_COOKIE['id']);
    }

    public function getTokenFromCookie()
    {
        return base64_decode($_COOKIE['tokenID']);
    }

    public function getDateToken()
    {
        $tokenID = $this->getTokenFromCookie();
        $userID = $this->getDecodedUserID();
        $con = $this->connectDb();
        $sql = "SELECT token_date FROM tokens WHERE idtokens = ? AND idusera = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('dd', $tokenID, $userID);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($date);
            $stmt->fetch();
            $stmt->free_result();
            $con->close();
            return $date;
        } else {
            return false;
        }
    }

    public function updateToken(): bool
    {
        $tokenID = $this->getTokenFromCookie();
        $con = $this->connectDb();
        $sql = "UPDATE tokens SET token_date = ? WHERE idtokens = ?";
        $stmt = $con->prepare($sql);
        $date = date("Y-m-d H:i:s");
        $stmt->bind_param('sd', $date, $tokenID);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows() > 0) {
            $stmt->free_result();
            $con->close();
            return true;
        } else {
            $stmt->free_result();
            $con->close();
            return false;
        }
    }

    public function deleteToken(): bool
    {
        setcookie('tokenID', "", time() - 3600);
        setcookie('id', "", time() - 3600);
        $tokenID = $this->getTokenFromCookie();
        $userID = $this->getDecodedUserID();
        $con = $this->connectDb();
        $sql = "DELETE FROM tokens WHERE idtokens = ? AND idusera = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('dd', $tokenID, $userID);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows() > 0) {
            $stmt->free_result();
            $con->close();
            return true;
        } else {
            $stmt->free_result();
            $con->close();
            return false;
        }
    }

    public function deleteOlderAuctions()
    {
//        $con = $this->connectDb();
//        $sql = 'SELECT * FROM'
//        $d = DateTime::createFromFormat('Y-m-d', $auctionDeadline);
//        $deadlineTimestamp = $d->getTimestamp();
//        $a = time();
//        $timeDiff = $deadlineTimestamp - $a;
//        $timeDiff = ((($timeDiff/60)/60)/24);
    }

    public function logout()
    {
        $this->deleteToken();
        session_destroy();
    }
}