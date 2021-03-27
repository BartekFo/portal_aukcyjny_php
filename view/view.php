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
        if (isset($_COOKIE['tokenID'])) {
            try {
                //generowanie daty dzisiejszej oraz zebranie daty z tokenu
                $date = new DateTime(date("Y-m-d H:i:s"));
                $dateToken = new DateTime(date($auth->getDateToken()));
                //sprawdzenie czy token jest jeszcze ważny
                $interval = abs($date->getTimestamp() - $dateToken->getTimestamp()) / 60;
                //sprawdzamy czy wartość tokenu w bazie jak ta w sesji i czy jeszcze nie wygasł
                if ($interval < 5) {
                    $auth->updateToken();
                    return true;
                } else {
                    //jeśli wygasł to usuwamy token
                    $auth->deleteToken();
                    return false;
                }
            } catch (Exception $e) {
                print_r("error: " . $e);
            }
        } else {
            return false;
        }
    }
}