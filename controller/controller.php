<?php

class Controller
{
    public function loadView($name, $path = 'view/')
    {
        $name = $name . "View";
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

//    public function loadModal($name, $path = 'model/')
//    {
//        $name = $name . "mainModel";
//        $path = $path . $name . '.php';
//
//        if (is_file($path)) {
//            require $path;
//            return new $name();
//        } else {
//            echo 'wrong path';
//            echo '<br>';
//            echo $path;
//        }
//    }
}