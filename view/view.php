<?php
class view
{
    public function render($name, $path = "templates/")
    {
        $path = $path . $name . ".html";
        if (is_file($path)) {
            require $path;
        }
    }

    public function loadModel($name, $path = 'model/')
    {
        $name = $name . "Model";
        $path = $path . $name . '.php';
        if (is_file($path)) {
            require $path;
            return new $name();
        } else {
            echo 'wrong path';
            echo '<br>';
            echo $path;
        }
    }

    public function set($name, $value)
    {
        $this->$name = $value;
    }

    public function get($name)
    {
        return $this->$name;
    }

    public function redirect($url)
    {
        header('Location: ' . $url);
    }

    public function isLogged($auth): bool
    {
        session_start();
        // Sprawdzenie czy w sesji jest token
        if (isset($_SESSION['token'])) {
            try {
                //wygenerowanie dla tokenu daty i tokenu zapisanego w bazie
                $date = new DateTime(date("Y-m-d H:i:s"));
                $dateToken = new DateTime(date($auth->getDateToken($_SESSION['idu'])));
            } catch (Exception $e) {
                print_r("error: " . $e);
            }
            //sprawdzenie czy token jest jeszcze ważny
            $interval = abs($date->getTimestamp() - $dateToken->getTimestamp()) / 60;
            if (($auth->getToken($_SESSION['idu']) === $_SESSION['token']) && ($interval < 5)) {
                $auth->setLogin($_SESSION['email']);
                $auth->updateToken($_SESSION['idu']);
                return true;
            } else {
                $auth->deleteToken($_SESSION['idu']);
                return false;
            }
        } else {
            return false;
        }
    }
}