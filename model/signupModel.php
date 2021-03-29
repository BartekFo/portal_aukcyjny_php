<?php

class signupModel extends mainModel
{
    public function createUser(): mysqli_result|bool|string
    {
        $con = $this->connectDb();
        if(!is_null($con)) {
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];
            $repwd = $_POST["repwd"];

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $sql = 'SELECT email FROM users WHERE email = \'' . $email . '\'';
                echo $sql;
                $result = $con->query($sql);
                if($result->num_rows > 0) {
                    return "Dany email został już użyty. Przejdź do zakładki logowania.";
                } else {
                    if ($pwd === $repwd) {
                        $uppercase = preg_match('@[A-Z]@', $pwd);
                        $lowercase = preg_match('@[a-z]@', $pwd);
                        $number    = preg_match('@[0-9]@', $pwd);
                        $specialChars = preg_match('@[^\w]@', $pwd);
                        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8) {
                            return "Hasło powinno posiadać conajmniej 8 znaków, dużą i małą literę, cyfrę i znak specjalny";
                        } else {
                            $options = [
                                'cost' => 11
                            ];
                            $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
                            $sql = 'INSERT INTO users (email, password) VALUES (?, ?)';
                            $stmt = $con->prepare($sql);
                            $stmt -> bind_param('ss', $email, $hashedPwd);
                            $stmt->execute();
                            $sql = 'SELECT idusers FROM users ORDER BY idusers DESC LIMIT 1';
                            $result = $con->query($sql);
                            if($result->num_rows > 0) {
                                $resArr = $result->fetch_array();
                                $userID = $resArr[0];
                                $stmt->close();
                                $con->close();
                                $hashedID = base64_encode($userID);
                                $this->setToken($userID);
                                setcookie('id', $hashedID, 2147483647);
                                return true;
                            } else {
                                $stmt->close();
                                $con->close();
                                return "Błąd systemu!";
                            }
                        }
                    } else {
                        $con->close();
                        return "Hasła się nie zgadzają. Upewnij się, że podałeś je poprawnie";
                    }
                }
            } else {
                $con->close();
                return "Niepoprawny email!";
            }
        }
    }
}